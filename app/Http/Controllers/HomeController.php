<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use App\Models\News;
use App\Http\Requests\CommentStoreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Repositories\Comment\CommentRepository;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Product\ProductRepository;
use App\Repositories\News\NewsRepository;
use App\Repositories\Introduce\IntroduceRepository;
use App\Repositories\Province\ProvinceRepository;
use App\Repositories\District\DistrictRepository;
use App\Repositories\Ward\WardRepository;
use App\Repositories\ParentsNotes\ParentsNotesRepository;
use Spatie\Searchable\Search;
use Spatie\Searchable\ModelSearchAspect;

class HomeController extends Controller
{
    /**
     * @var CategoryRepositoryInterface|\App\Repositories\Repository
    */

    protected $categoryRepository;
    /**
     * @var CommentRepositoryInterface|\App\Repositories\Repository
    */

    protected $commentRepository;
    /**
     * @var ProductRepositoryInterface|\App\Repositories\Repository
    */
    protected $productRepository;

    /**
     * @var NewsRepositoryInterface|\App\Repositories\Repository
    */
    protected $newsRepository;

    /**
     * @var IntroduceRepositoryInterface|\App\Repositories\Repository
    */
    protected $introduceRepository;

    /**
     * @var ProvinceRepositoryInterface|\App\Repositories\Repository
    */
    protected $districtRepository;

    /**
     * @var DistrictRepositoryInterface|\App\Repositories\Repository
    */
    protected $wardRepository;

    /**
     * @var WardRepositoryInterface|\App\Repositories\Repository
    */
    protected $provinceRepository;

    /**
     * @var ParentsNotesRepositoryInterface|\App\Repositories\Repository
    */
    protected $parentsNotesRepository;
    

    public function __construct(
        CategoryRepository $categoryRepository,
        CommentRepository $commentRepository,
        ProductRepository $productRepository,
        NewsRepository $newsRepository,
        IntroduceRepository $introduceRepository,
        ProvinceRepository $provinceRepository,
        DistrictRepository $districtRepository,
        WardRepository $wardRepository,
        ParentsNotesRepository $parentsNotesRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->commentRepository = $commentRepository;
        $this->productRepository = $productRepository;
        $this->newsRepository = $newsRepository;
        $this->introduceRepository = $introduceRepository;
        $this->provinceRepository = $provinceRepository;
        $this->districtRepository = $districtRepository;
        $this->wardRepository = $wardRepository;
        $this->parentsNotesRepository = $parentsNotesRepository;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        $introduces = $this->introduceRepository->getIntroduceWidthPagination();
        return view('frontend.home')
            ->with('categories', $categories)
            ->with('introduces', $introduces)
        ;
    }

    /**
     * Show the category page
     *
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCategory(Request $request, $slug)
    {
        $provinces = $this->provinceRepository->getProvinceOrderByName();
        $districts = $this->districtRepository->getDistrictById();
        $wards = $this->wardRepository->getWardById();
        $resultData = $this->categoryRepository->getCategoryBySlug($slug);
        $category = $resultData[0];
        $prentsNotes = $this->parentsNotesRepository->getParentsNotesByCategoryId($category->id);
        return view('frontend.category')
            ->with('category', $category)
            ->with('provinces', $provinces)
            ->with('districts', $districts)
            ->with('wards', $wards)
            ->with('prentsNotes', $prentsNotes)
        ;
    }

    /**
     * Show the product page
     *
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProduct(Request $request, $slug)
    {
        $product = $this->productRepository->getProductBySlug($slug);
        // Array Thông số kỹ thuật
        $specifications = [
            "Màn hình" => $product->screen,
            "camera sau" => $product->camera_rear,
            "camera trước" => $product->camera_front,
            "Hệ điều hành - CPU" => $product->cpu,
            "Bộ nhớ - Lưu trữ" => $product->memory,
            "Kết nối" => $product->connect,
            "Thông tin pin - Sạc" => $product->charging,
        ];
        $products = $this->productRepository->getProductOtherSlug($slug);
        $comments = $this->commentRepository->getCommentWithProductSubcomment($product->id);
        $commentsTotal = $comments->count();
        return view('frontend.product')
                ->with('product', $product)
                ->with('products', $products)
                ->with('specifications', $specifications)
                ->with('comments', $comments)
                ->with('commentsTotal', $commentsTotal)
        ;
    }

    /**
     * Search products
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $keyword = $request->get('query');
        // $products = (new Search())
        //     ->registerModel(\App\Models\Product::class, ['id','sku','name','slug'])
        //     ->perform($keyword);
        // return view('frontend.search', compact('products', 'keyword'));
        // return view('frontend.search')
        //     ->with('products', $products)
        //     ->with('keyword', $keyword)
        // ;

        
        
        $products = Product::search($keyword)->paginate(config('common.pagination.frontend'));
        return view('frontend.search')
                ->with('products', $products)
                ->with('keyword', $keyword)
            ;
    }

    public function showIntroduce()
    {
        return view('frontend.introduce');
    }

    /**
     * Store a new info customer.
     *
     * @param CommentStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CommentStoreRequest $request)
    {
        $this->commentRepository->create($request->all());
        return redirect()->route('product', [$request->slug])->with('success', 'You have successfully created a new product');
    }


    public function showNewsIndex()
    {
        $news = $this->newsRepository->getNewsWidthPagination();
        $products = $this->productRepository->getProductWidthPagination();
        return view('frontend.news.index')
                ->with('products', $products)
                ->with('news', $news);
    }

    /**
     * Search news
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showNews(Request $request, $slug) 
    {
        $news = $this->newsRepository->getNewsBySlug($slug);
        $newsData = $this->newsRepository->getNewsOtherSlug($slug);
        $products = $this->productRepository->getProductWidthPagination();
        return view('frontend.news.news')
                ->with('news', $news)
                ->with('newsData', $newsData)
                ->with('products', $products);
    }
}
