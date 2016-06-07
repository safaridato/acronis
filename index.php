<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <title>Acronis Purchase Page</title>
    <link rel="stylesheet" href="content/css/template.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
</head>
<body ng-app="acronis">

<div class="container">
    <div class="content-block">
        <section class="about-product-section">
            <div class="platforms-container">
                <img src="content/images/supported-platforms.png"/>
            </div>
            <article class="titles">
                <h1>Acronis True Image Cloud</h1>
                <span>The Easiest, Fastest and Most Powerful Way to<br> Backup Your PC, Mac and Mobile Devices </span>
            </article>

            <!--Usefull Links-->
            <div class="usefull-links">
                <ul>
                    <li><a href="#Key features">Key features</a></li>
                    <li><a href="#Key features">Key features</a></li>
                    <li><a href="#Expert reviews">Expert reviews</a></li>
                    <li><a href="#What our customers say">What our customers say</a></li>
                </ul>

                <ul>
                    <li><a href="#Videos">Videos</a></li>
                    <li><a href="#Requirements">Requirements</a></li>
                    <li><a href="#Documentation">Documentation</a></li>
                </ul>
            </div>
            <!--Usefull Links-->
        </section>

        <section class="purchase" ng-controller="MainController as MainCtrl">
            <div class="price-widget">
                <div class="price-selection">
                    <label ng-repeat="method in purchaseMethods" ng-class="{'active': $parent.package == method}">
                        <input type="radio" ng-model="$parent.package" ng-value="method">
                        <span>{{method.computersQty}} computer + {{method.devicesQty}} devices</span>
                    </label>
                    <div class="click-to-pay">
                        <div class="purchase-method">
                            <span class="price-container">
                                <span class="regular-price">{{package.updatePrice.regularPrice | currency:"$" }}</span>
                                <span class="price">{{package.updatePrice.price | currency:"$"}}</span>
                                per year
                            </span>
                            <button type="button" class="btn btn-default">UPGRADE</button>
                        </div>
                        <div class="purchase-method">
                            <span class="price-container">
                                <span class="regular-price">{{package.buyPrice.regularPrice | currency:"$" }}</span>
                                <span class="price">{{package.buyPrice.price | currency:"$"}}</span>
                                per year
                            </span>
                            <button type="button" class="btn btn-green">UPGRADE</button>
                        </div>

                    </div>
                    <!--                    {{package}}-->
                </div>

                <div class="delimiter"></div>

                <a href="#tryDemo" class="demo-href">Free trial</a>


                <ul class="download-links">
                    <li><a href="#windows"><img src="content/images/platform-widnows.png"/> </a></li>
                    <li><a href="#windows"><img src="content/images/platform-macos.png"/> </a></li>
                    <li><a href="#windows"><img src="content/images/platform-android.png"/> </a></li>
                    <li><a href="#windows"><img src="content/images/platform-ios.png"/> </a></li>
                </ul>
            </div>
        </section>
    </div>
</div>

<script src="content/js/main_app.js"></script>
</body>
</html>