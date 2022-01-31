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

'marumijinko.movie.html' => 'biseibutsu_marumijinko',
'aburamimizu.movie.html'=>'biseibutsu_aburamimizu'
'ame-ba.movie.html'=>'biseibutsu_ame-ba'
'borubokkusu.movie.html'=>'biseibutsu_borubokkusu'
'bouhura.movie.html'=>'biseibutsu_bouhura'
'enagawamusi.movie.html'=>'biseibutsu_enagawamusi'
'hirugatawamusi.movie.html'=>'biseibutsu_hirugatawamusi'
'hunagatakeisou.movie.html'=>'biseibutsu_hunagatakeisou'
'kagerou.movie.html'=>'biseibutsu_kagerou'
'kaimijinko.movie.html'=>'biseibutsu_kaimijinko'
'kenmijinko.movie.html'=>'biseibutsu_kenmijinko'
'marumijinko.movie.html'=>'biseibutsu_marumijinko'
'midorimusi.movie.html'=>'biseibutsu_midorimusi'
'mijinko.movie.html'=>'biseibutsu_mijinko'
'no-puriusu.movie.html'=>'biseibutsu_no-puriusu'
'rappamusi.movie.html'=>'biseibutsu_rappamusi'
'turiganemusi.movie.html'=>'biseibutsu_turiganemusi'
'zourimusi.movie.html'=>'biseibutsu_zourimusi'
    
    
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
