<?php

namespace Customize\Controller;


use Eccube\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends AbstractController
{
    /**
     * 転送するURLのリスト
     *
     * https://www.kasetu.co.jp/biseibutsu/marumijinko.movie.html から
     * https://www.kasetu.co.jp/user_data/biseibutsu_marumijinko へ転送する場合
     *
     * 'marumijinko.movie.html' => 'biseibutsu_marumijinko' のように記述する
     *
     * @var string[]
     */
    public static $pageList = [

'biseibutsu/marumijinko.movie.html' => 'biseibutsu_marumijinko',
'biseibutsu/aburamimizu.movie.html'=>'biseibutsu_aburamimizu'
'biseibutsu/ame-ba.movie.html'=>'biseibutsu_ame-ba'
'biseibutsu/borubokkusu.movie.html'=>'biseibutsu_borubokkusu'
'biseibutsu/bouhura.movie.html'=>'biseibutsu_bouhura'
'biseibutsu/enagawamusi.movie.html'=>'biseibutsu_enagawamusi'
'biseibutsu/hirugatawamusi.movie.html'=>'biseibutsu_hirugatawamusi'
'biseibutsu/hunagatakeisou.movie.html'=>'biseibutsu_hunagatakeisou'
'biseibutsu/kagerou.movie.html'=>'biseibutsu_kagerou'
'biseibutsu/kaimijinko.movie.html'=>'biseibutsu_kaimijinko'
'biseibutsu/kenmijinko.movie.html'=>'biseibutsu_kenmijinko'
'biseibutsu/marumijinko.movie.html'=>'biseibutsu_marumijinko'
'biseibutsu/midorimusi.movie.html'=>'biseibutsu_midorimusi'
'biseibutsu/mijinko.movie.html'=>'biseibutsu_mijinko'
'biseibutsu/no-puriusu.movie.html'=>'biseibutsu_no-puriusu'
'biseibutsu/rappamusi.movie.html'=>'biseibutsu_rappamusi'
'biseibutsu/turiganemusi.movie.html'=>'biseibutsu_turiganemusi'
'biseibutsu/zourimusi.movie.html'=>'biseibutsu_zourimusi'
    
    
    ];

    /**
     * @Route("/biseibutsu/{page}", methods={"GET"})
     */
    public function index(string $page)
    {
        if (isset(self::$pageList[$page])) {
            return new RedirectResponse('https://www.kasetu.co.jp/user_data/'.self::$pageList[$page]);
        }

        throw new NotFoundHttpException();
    }
}
