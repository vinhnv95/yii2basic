<?php
/**
 * Created by PhpStorm.
 * User: vinh
 * Date: 01/10/2016
 * Time: 13:24
 */
use kartik\sidenav\SideNav;
use yii\helpers\Html;
echo SideNav::widget([
    'type' => SideNav::TYPE_DEFAULT,
    'containerOptions'=> ['class' => 'sidebar'],
    'encodeLabels' => false,
    'heading' => '<span class="glyphicon glyphicon-calendar"></span>' . Yii::$app->formatter->asDate('now', 'long'),
    'items' => [
        [
            'label' => 'Invoice Manager 
                        <span class="pull-right widget-number" tooltip="To send">0</span>',
            'url' => '#'
        ],
        [
            'label' => 'Sending List'
                        . '<span class="pull-right widget-number" >0</span>'
                        . '<span class="pull-right widget-number" style="border-right: 1px solid grey;">0</span>    ',
            'url' => '#',
        ],
        ['label' => 'Payment Manager', 'url' => '#'],
        ['label' => 'Time Tracking', 'url' => '#'],
        ['label' => ''],
        [
            'label' => Html::img('@web/image/documents.png').'   Documents',
            'items' => [
                [
                    'label' => Html::img('@web/image/documents.png')
                        . '  Orders'
                        . '<span class="pull-right glyphicon glyphicon-plus-sign"></span>',
                    'url' => '#',
                ],
                [
                    'label' => Html::img('@web/image/documents.png')
                        . '  Invoices'
                        . '<span class="pull-right glyphicon glyphicon-plus-sign"></span>',
                    'url' => '#',
                ],
                [
                    'label' => Html::img('@web/image/documents.png')
                        . '  Receipts'
                        . '<span class="pull-right glyphicon glyphicon-plus-sign"></span>',
                    'url' => '#',
                ],

            ],
            'active' => true,
            'style' => 'background-color: white;',
        ],
        [
            'label' => Html::img('@web/image/catalog.png')
                . '  Line Item Catalog'
                . '<span class="pull-right glyphicon glyphicon-plus-sign"></span>',
            'url' => '#',
        ],
        [
            'label' => Html::img('@web/image/client.png')
                . '  Clients'
                . '<span class="pull-right glyphicon glyphicon-plus-sign"></span>',
            'url' => '#',
        ],
        [
            'label' => Html::img('@web/image/team.png')
                . '  Team'
                . '<span class="pull-right glyphicon glyphicon-plus-sign"></span>',
            'url' => '#',
        ],

    ],
]);