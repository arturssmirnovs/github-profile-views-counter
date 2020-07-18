<?php

namespace app\controllers;

use app\models\Views;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->redirect("https://github.com/arturssmirnovs/github-profile-views-counter");
    }

    /**
     * Displays SVG Views button
     *
     * @return string
     */
    public function actionViews($id)
    {
        $this->layout = "none";

        $this->response->format = $this->response::FORMAT_RAW;
        $this->response->headers->set('Content-Type', 'image/svg+xml');
        $this->response->headers->set('Cache-Control', 'max-age=0, no-cache, no-store, must-revalidate');

        $profile = Views::find()->where(["profile" => $id])->one();

        if (!$profile) {
            $profile = new Views();
            $profile->profile = $id;
        }

        $profile->views = $profile->views+1;

        if (!$profile->save()) {
            throw new \ErrorException("View not saved");
        }

        return $this->render('svg', [
            "views" => $profile->getViews(),
        ]);
    }
}
