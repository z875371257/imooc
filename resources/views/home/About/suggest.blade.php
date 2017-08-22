
@extends('layout.list')
@section('title','意见反馈')

@section('content')

        <style type="text/css">



            @media screen and (max-width: 1000px) and ( min-width: 650px) {
                body{min-width: 320px;
                    width: 100%;
                    overflow-x: hidden;}
                .container {
                    width: 96% !important;
                    margin-right: 1%;
                    background-color: red !important;
                }
                .photo-viewer img {
                    width: 100% !important;
                }
                .editinfo {padding: 0px;}
                .other-contact {
                    width: 100%;
                    overflow-x: hidden;
                }
                .other-right {
                    display: none !important;
                }
                .other-left {
                    width: 100% !important;
                    overflow: hidden !important;
                    padding-left: 0px;
                    padding-right: 0px;

                }
                #contact{width: 98.5% !important; padding: 0px;}
                #info{
                    width: 98.5% !important;
                }
                .field-wrap{
                    width:100% !important;

                }
                .feedback-wrap{
                    width: 100% !important;
                }
                .feedback-content{
                    width: 100% !important;
                }
                .field-wrap *{
                    margin-left:0px!important;
                    margin-right: 0px !important;
                    padding-right: 0px !important;

                }
                .feedback-wrap *{
                    margin-left:0px !important;
                    padding-right: 0px !important;
                }
                .feedback-content *{
                    margin-left:0px !important
                    margin-right: 0px !important;
                    padding-right: 0px !important;;
                }

            }

            @media screen and (max-width: 650px) {
                body{min-width: 320px;
                    width: 100%;
                    overflow-x: hidden;}
                .photo-viewer img {
                    width: 100% !important;
                }
                .container {
                    width: 96% !important;
                    margin-right: 1%;
                    background-color: red !important;
                }
                .editinfo {padding: 0px;}
                .other-contact {
                    width: 100%;
                    overflow-x: hidden;
                }
                .other-right {
                    display: none !important;
                }
                .other-left {
                    width: 100% !important;
                    overflow: hidden !important;
                    padding-left: 0px;
                    padding-right: 0px;

                }
                #url {
                    width: 93% !important;
                }
                #contact{width: 97% !important; padding: 0px;}
                #info{
                    width: 97% !important;
                }
                .field-wrap{
                    width:100% !important;

                }
                .feedback-wrap{
                    width: 100% !important;
                }
                .feedback-content{
                    width: 100% !important;
                }
                .field-wrap *{
                    margin-left:0px!important;
                    margin-right: 0px !important;
                    padding-right: 0px !important;

                }
                .feedback-wrap *{
                    margin-left:0px !important;
                    padding-right: 0px !important;;
                }
                .feedback-content *{
                    margin-left:0px !important
                    margin-right: 0px !important;
                    padding-right: 0px !important;;
                }

            }


            .gotoTopBtn {
                margin-left: 620px;
            }
            .container {
                width: 1200px;
                margin: 0 auto;
            }



            /*混入.menu-vertical*/
            .other-left {
                float: left;
                width: 825px;
                overflow: visible;
                background-color: #fff;
                list-style-type: none;
                padding-bottom: 50px;
            }
            .dynamicLoad {text-align: center;}
            .other-left li {
                position: relative;
                width: 100%;
                overflow: visible;
            }
            .other-left li:last-child {
            }
            .other-left li a {
                position: relative;
                display: block;
                padding-left: 10px;
                height: 60px;
                line-height: 60px;
                text-decoration: none;
                font-size: 14px;
                color: #787d82;
            }
            .other-left li a span.tip {
                height: 16px;
                border-radius: 10px;
                background-color: red;
                line-height: 16px;
                font-size: 12px;
                color: white;
                padding: 0 10px;
                float: left;
                right: 25px;
                top: 23px;
            }
            .other-left li:hover a span {
                color: #14191e;
            }
            .other-left li:hover a span.tip {
                color: white;
            }
            .other-left li.selected:before {
                content: " ";
                position: absolute;
                top: 0;
                width: 2px;
                height: 60px;
                left: -21px;
            }
            .other-left li.selected a span {
                color: #cc0000;
            }
            .other-left li.selected a span.tip {
                color: white;
            }
            .other-right {
                margin-top: 20px;
                width: 327px;
                padding:24px;
                box-sizing: border-box;
                float: right;
                background: #f3f5f7;
                overflow-x: hidden;
                font-size: 14px;
                font-family: "Microsoft YaHei";
                color: #787d82;
                line-height: 2.143;
                text-align: justifyLeft;
                z-index: 134;
            }
            .other-right h4 {
                margin-bottom: 20px;
                font-size: 16px;
                font-weight: 700;
                color: #07111b;
            }
            .other-right li {
                color: #4d555d;
                font-size: 14px;
            }
            .mr24 {margin-right: 24px;}

            .imagesWrap {}

            .color_gtoupTop{
                color: #14191e;
            }



            }
            .other-right-wrap {
                position: relative;
                min-height: 750px;
            }
            .others {
            }
            .others h1 {
                font-size: 16px;
                line-height: 49px;
                color: #363d40;
                margin-bottom: 2.1em;
                border-bottom: 1px solid #eceff0;
            }
            .others p {
                margin: 1.5em 0;
                line-height: 150%;
                color: #656e73;
            }
            .others .qqText,
            .others .groupNum {
                margin-bottom: 0;
            }
            .others .groupNum {
                line-height: 24px;
                margin-top: 10px;
                padding-left: 20px;
            }
            .others ol {
                padding-left: 10px;
            }
            .space-side {
                margin: 0 20px 20px;
                color: #60686b;
            }
            .perface {
                border-bottom: 1px solid #eceff0;
            }
            .perface li {
                line-height: 31px;
                font-size: 12px;
                margin-bottom: 20px;
            }
            .job-nav {
                padding-top: 30px;
                margin-bottom: 28px;
            }
            .job-nav li {
                float: left;
                width: 150px;
                margin-right: 10px;
            }
            .job-nav a {
                font-size: 15px;
                font-weight: bold;
                color: #6ccb7a;
            }
            .job-nav a:hover {
                text-decoration: underline;
                color: #319d42;
            }
            .job-block {
                margin-bottom: 45px;
            }
            .job-block ol {
                line-height: 30px;
            }
            .job-block li {
                font-size: 12px;
            }
            .job-block h2 {
                font-size: 15px;
                color: #303538;
                margin: 1em 0;
            }
            .job-block h3 {
                font-size: 14px;
                margin-top: 28px;
            }
            .others .job-email {
                font-size: 12px;
                padding: 34px 0 0 10px;
                margin: 0;
                color: #60686b;
            }
            .works-wrap h1 {
                font-size: 15px;
                color: #333;
                padding: 15px 0;
                border-bottom: 1px solid #eceff0;
                margin: 0;
            }
            .recruit-contact {
                font-size: 12px;
                line-height: 30px !important;
                margin: 0 !important;
            }
            .recruit-contact span {
                color: #c9394a;
            }
            .other-contact {
                width: 835px;
                padding-bottom: 100px;
                margin-right: -60px;
                color: #60686b;
            }
            .other-contact li {
                float: left;
                padding-bottom: 30px;
                width: 300px;
                margin-right: 170px;
            }
            .other-contact .contact-right {
                margin-right: 0;
            }
            .others .other-contact h1 {
                padding: 10px;
                margin: 0;
                border-bottom: 0 none;
            }
            .other-contact h2 {
                padding: 0 20px 0;
                font-size: 14px;
                color: #1f2426;
            }
            .others .contact-title {
                margin-bottom: 0.8em;
            }
            .other-contact p {
                padding: 0 20px 32px;
                margin: 0;
                font-size: 12px;
                line-height: 30px;
                border-bottom: 1px solid #eceff0;
            }
            .alert {
                position: absolute;
                z-index: 1030;
                left: 300px;
            }
            /*about us*/
            .us-list {
                padding-left: 20px;
            }
            .us dt {
                color: #303538;
                font-size: 14px;
                padding-left: 27px;
                background: url(../images/us-sprite.png) no-repeat -85px -192px;
            }
            .us dd {
                padding-left: 27px;
                margin-bottom: 28px;
                font-size: 12px;
                color: #60686b;
            }
            .us-app-wrap {
                margin-top: 18px;
            }
            .us-app-code {
                width: 100px;
                height: 100px;
                background: url(../images/us-sprite.png) no-repeat 0 0;
            }
            .us-app-links {
                float: left;
                margin-left: 30px;
                border-left: 1px solid #edf0f2;
                padding-left: 30px;
                height: 100px;
            }
            .us-app-links a {
                display: block;
                width: 120px;
                height: 40px;
                line-height: 40px;
                text-align: center;
                background: #39b94e;
                font-size: 18px;
            }
            .us-app-links a:link,
            .us-app-links a:visited {
                color: #fff;
            }
            .us-app-links a:hover {
                background: #33a646;
            }
            .us-app-links i {
                display: inline-block;
                width: 15px;
                height: 18px;
                vertical-align: -2px;
                margin-right: 5px;
                background: url(../images/us-sprite.png) no-repeat;
            }
            .us-app-iphone {
                margin-bottom: 20px;
            }
            .us-app-iphone i {
                background-position: -85px -140px;
            }
            .us-app-android i {
                background-position: -85px -168px;
            }
            .us-more {
                padding-left: 48px;
            }
            .join-status {
                padding-left: 10px;
            }
            .us-join-qq,
            .us-join-qq:link {
                padding-left: 10px;
                color: #39b94e;
            }
            .us-join-qq:visited {
                color: #319d42;
            }
            .us-join-qq:hover {
                color: #61c771;
            }
            .qqGroup li {
                line-height: 34px;
            }
            /*about group*/
            .group-bd {
                width: ;
            }
            .others .order-list {
                padding: 0;
            }
            .group-bd li {
                list-style: none;
            }
            .item1 li {
                float: left;
                vertical-align: top;
            }
            .item2 li {
                float: right;
            }
            .group-img {
                vertical-align: top;
            }
            .wrap,
            .speci-wrap {
                display: table;
                width: 184px;
                height: 184px;
                position: relative;
            }
            .img {
                vertical-align: top;
                display: block;
            }
            .img-wrap {
                height: 100%;
            }
            .group .lowlayer {
                margin: 0 14px;
                color: #fff;
                height: 100%;
                *width: 90%;
                position: absolute;
                z-index: 300;
                top: 0;
            }
            .lowlayer td {
                line-height: 24px;
            }
            .group .layer-title {
                position: absolute;
                width: 184px;
                height: 184px;
                display: table;
                vertical-align: middle;
                color: white;
                display: none;
            }
            .group .wrap.hover .layer-title {
                display: table;
            }
            .group .speci-wrap .layer-title {
                display: table;
            }
            .group .speci-wrap.hover .layer-title {
                display: none;
            }
            .group .equi-square .layer-title {
                width: 368px;
                height: 368px;
            }
            .group .mid-equi-square .layer-title {
                width: 368px;
            }
            .group .wider-equi-square .layer-title {
                width: 552px;
            }
            .group .layer-title span {
                display: table-cell;
                vertical-align: middle;
                line-height: 20px;
                padding: 10px;
            }
            .purple {
                /*background: #945aae;*/
                background: rgba(148, 90, 174, 0.8);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#cc945aae,endColorstr=#cc945aae);
            }
            .blue {
                /*background: #326db9;*/
                background: rgba(50, 109, 185, 0.8);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#cc326db9,endColorstr=#cc326db9);
            }
            .bg-red {
                /*background: #c9394a;*/
                background: rgba(201, 57, 74, 0.8);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#ccc9394a,endColorstr=#ccc9394a);
            }
            /*friend links*/
            .friend-links {
                padding: 0 20px;
            }
            .friend-links dd {
                font-size: 12px;
                width: 190px;
            }

            body{background-color: #fff;}
            #info,#contact,#city,#ct,.input{border:1px solid #d0d6d9;font-size:14px;transition:border-color 0.2s;-webkit-transition:border-color 0.2s;-moz-transition:border-color 0.2s;-o-transition:border-color 0.2s;padding: 10px 7px;box-sizing: border-box;}
            #info:focus,#contact:focus,.input:focus{border-color: #7bd089; }
            #info{width:776px;height: 140px; resize: none; overflow: hidden; }
            #contact{ vertical-align: middle;width: 776px;height: 40px;line-height: 40px;font-size:14px;padding: 0px 10px; }
            #url{ vertical-align: middle;width: 736px;height: 40px;line-height: 40px;font-size:14px;padding: 0px 10px; }
            #city,#ct{ vertical-align: middle;width:164px;height: 24px;line-height: 24px;font-size:14px;padding: 7px;margin-right:30px; }
            a.editbtn{ color:#00b33b;display: inline-block;margin-left:20px; float: right; }
            .editinfo{ background:#f4f7f8;padding:20px;margin-bottom:30px;margin-top:20px;overflow:hidden; }
            .editinfo h5{ display:block; color:#787d82;font-size: 14px;line-height:26px; }
            .editinfo div:first-child{ margin-bottom:15px; }
            .myadres span{ display: inline-block;line-height:40px;color:#14191e;font-size: 14px;margin-right:25px; }
            .myadres span.edittip{ color:#787d82;font-size: 12px; margin-right: 0; float: right; }
            .edittip a{margin-left: 0}
            .feedback-wrap p{margin: 0;}
            .feedback-wrap button{float:right;display: inline-block;vertical-align: middle;color: #fff;font-size: 14px;background-color:#39b94e;height: 50px;line-height: 40px;width: 120px;cursor: pointer;text-align: center;transition:background-color 0.2s;-webkit-transition:background-color 0.2s;-moz-transition:background-color 0.2s;-o-transition:background-color 0.2s;}
            .feedback-wrap button:hover{ background-color: #33a646;}
            .feedback-wrap h4{margin-bottom: 12px;}
            .feedback-wrap .rlf-tip-wrap{ font-size: 12px;height: 30px; line-height: 30px;}
            .feedback-wrap .rlf-tip-error{background: url("/static/images/rl-sprite.png") no-repeat -108px -933px; padding-left: 15px; color: #be3948;}
            .feedback-wrap #feedback-error{float:right;background: url("/static/images/rl-sprite.png") no-repeat -108px -933px; padding-left: 15px; color: #be3948;}
            .feedback-wrap .error-field{border-color:#be3948 !important; }
            .placeholder{color: #d0d6d9;font-size: 14px;}
            .phd:-moz-placeholder{color: #d0d6d9;font-size: 14px;}
            .phd::-moz-placeholder{ color: #d0d6d9; font-size: 14px;}
            .phd::-webkit-input-placeholder{color: #d0d6d9;font-size: 14px;z}
            .phd:-ms-input-placeholder{color: #d0d6d9; font-size: 14px;}
            .result-wrap{display: none; text-align: center;padding: 100px 0;width: 100%;}
            .result-wrap h2{font-size: 24px;color: #656e73; line-height: 1.5em;}
            .result-wrap a{display: inline-block;margin-top: 15px;}
            .result-wrap a:link,.result-wrap a:visited{color:#39b94e;}
            .qqGroup-feed{position: absolute;right: 65px;top: 85px;}
            .field-wrap{float:left; padding:0px 24px;}
            .tip{color: #83888c!important;}
            .text{color: #14191e!important;}
            .feedback-content{float:left;width:100%;margin-top:40px; }
            .photos-thumb {overflow: hidden; margin-bottom: 10px;}
            .feedback-nav,.feedback-list .feedback-item{border-bottom:1px solid #b7bbbf;}
            .feedback-nav li a{display: block;height: 100%;}
            .feedback-nav li a:hover{color: #08090b;}
            .feedback-nav li{float: left;width: 120px; height: 45px;line-height: 45px;}
            .feedback-nav li.selected{color:#08090b;border-bottom: solid 2px #14191e;}
            .feedback-list .feedback-item{padding: 25px 24px; box-sizing: border-box;}
            .feedback-list .feedback-item p{line-height: 24px;word-wrap:break-word; word-break:break-all;}
            .feedback-list .feedback-item .time{margin-top: 10px;color: #c8cdd2; font-size: 12px;}
            .feedback-list .feedback-item .reply{background: #fffbe5;padding: 16px 20px;margin-top: 18px; color:#787d82; background-color: #f6f6f6; font-size: 12px;line-height: 24px;}
            .feedback-list .feedback-item .imooc-manager{color: #f01414;}
            .feedback-list .no-data{padding-top:50px;color:#c8cdd2;line-height: 200px;height: 200px;font-size: 24px;border: none;text-align: center;}
            .feedback-item .pics{padding: 10px 0 0px;}
            .photos-thumb li{float: left; position:relative; width: 100px; height: 100px; margin: 0 8px 12px 0; border: 1px solid transparent; }
            .photos-thumb li.current{ border-color: #F01400; }
            .photos-thumb img { width: 100px; height: 100px; cursor: url(/static/img/feedback/zoom_in.png),url(/static/img/feedback/zoom_in.cur),auto;}
            .photos-arrow { width: 0; height: 0; line-height: 0; font-size: 0; border: transparent 8px dashed; border-top:8px solid #F01400; position: absolute; left: 30px; bottom: -16px; background: 0 0; display: none;}
            .photos-thumb li.current .photos-arrow{ display: block; }
            .photos-thumb li.current img { cursor: url(/static/img/feedback/zoom_out.png),url(/static/img/feedback/zoom_out.cur),auto;}
            .photo-viewer{ display: none;}
            .photo-viewer-inner{ position: relative; float: left; max-width: 400px; }
            .photo-viewer img{ width: 400px; /*height: 250px;*/ cursor: url(/static/img/feedback/zoom_out.png),url(/static/img/feedback/zoom_out.cur),auto;}
            .photo-viewer-navleft, .photo-viewer-navright{ position: absolute; top: 0; bottom: 0;  width: 20%; cursor: pointer; background:url(about:blank)\9; }
            .photo-viewer-navleft{left: 0;}
            .photo-viewer-navright{right: 0;}
            .photo-viewer-navlefticon, .photo-viewer-navrighticon{ position: absolute; top:50%;  width:20px; height: 35px; margin-top: -18px; }
            .photo-viewer-navlefticon{ left: 12px;}
            .photo-viewer-navrighticon{ right: 12px;}
            .photo-viewer-navleft:hover .photo-viewer-navlefticon{background:url('/static/img/feedback/navleft.png') center no-repeat transparent;}
            .photo-viewer-navright:hover .photo-viewer-navrighticon{background:url('/static/img/feedback/navright.png') center no-repeat transparent;}
            .mask{position: absolute;
                width: 100px;
                height: 100px;
                background-color: #fff;
                opacity: 0.8;
                background-image: url('/static/img/u/loading_fff.gif');
                background-position: center;
                background-repeat: no-repeat;}
            .serverbox{
                display: none;
            }
            .textArea {
                border-style: solid;
                border-width: 1px;
                border-color: rgb(208, 214, 217);
                background-color: rgb(255, 255, 255);
                width: 842px;
                height: 142px;
            }
            .headtitle{height: 55px; font-weight: bold;line-height:55px;  font-size: 16px;color: #14191e; border-bottom: 1px solid #b7bbbf; }
            .typeselct{height: 45px;padding: 0px 24px 10px; line-height: 25px;margin-top: 20px;color: #5e666e;}
            .typeselct span {display: inline-block;}
            .uploadImgsTip  {margin-bottom: 30px !important;}
            .feedHead {
                margin-left: 0px;
                text-align: left !important;
                color: #14191e;
                font-size: 16px;
                line-height: 18px;
                cursor: default;
            }
            .feedHead #myFeedback{
                font-size: 16px;
                line-height: 32px;
                color: #4d555d;
            }
            .feedHead #myFeedback:hover{
                color: #4d555d;
                cursor: default;
            }
            .feedbackSuccess {text-align: center; margin-top: 75px; width: 100%;}
            .feedbackSuccess .location{font-size: 14px; color: #93999f; margin-top: 20px; width: 100%;}
            .feedbackSuccess .thanks{ font-size: 18px; color:#2b333b; width: 100%;font-weight: 700;}
            .feedbackSuccess .icon{color:#00b33b; margin-right: 20px; font-size: 30px; position: relative; top:5px; width: 100%;}
            .inputNum{
                position: relative;
                top: -62px;
                left: -12px;
            }
            .delete {
                font-size: 20px;
                color: #f01414;
                position: absolute;
                right: 12px;
                top: 5px;
                text-align: center;
                font-weight: bold;
                cursor: pointer;
                width: 20px;
                height: 20px;
                background-repeat: no-repeat;
                background-image: url('/static/img/delete.png')
            }
            .feedimg {margin-right: 5px !important;}





        </style>
    <div class="container clearfix">
        <div class="other-left ">
            <div id="pjax-tiper" class="alert" style="display:none">正在加载...</div>
            <div id="pjax-container">
                <div class="others clearfix">
                    <div class="headtitle">意见反馈</div>
                <form  action="/suggest" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="typeselct" name="feedtype">
                        <span class="js-feedcheck mr20"> <span ><input  class="mr10"  name="feedtype" value="内容意见" type="radio"></span>内容意见 </span>
                        <span class="js-feedcheck mr20"> <span ><input  class="mr10" name="feedtype" value="产品建议" type="radio"></span>产品建议 </span>
                        <span class="js-feedcheck mr20"> <span ><input  class="mr10" name="feedtype" value="技术问题" type="radio"></span>技术问题 </span>
                        <span class="js-feedcheck mr20"> <span ><input  class="mr10" name="feedtype" value="其它" type="radio"></span>其它 </span>
                    </div>
                    <div class="feedback-wrap">
                        <div class="field-wrap">
                            <div>
                                <textarea name="content" maxlength="400" id="info" class="phd js-jianyi" cols="30" rows="10" placeholder="请填写具体内容帮助我们了解您的意见与建议。"></textarea>
                                <p class="rlf-tip-wrap"></p>
                            </div>
                            <p class="fr inputNum js-inputNum">400</p>

                            <div>
                                <input name="contact" id="contact" class="phd" placeholder="请留下真实联系方式（邮箱、QQ），方便我们答疑解惑！" type="text">
                                <p class="rlf-tip-wrap"></p>
                            </div>
                            <div class="editinfo">
                                <div>
                                    <h5>相关页面地址：</h5>
                                    <input name="url" id="url" class="phd input" placeholder="页面地址" type="text">
                                </div>

                            </div>
                            <div class="btn-wrap">
                                <button hidefocus="true" id="submit" class="fl" >提交</button>
                            </div>
                        </div>

                    </div>

                </form>
                </div>


            </div>

        </div>
        <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
        <script src="/admins/layer/layer.js"></script>

        <div class="other-right">
            <h4>想及时沟通，请加慕粉QQ群！</h4>
            <h1>**加了也不让你进**</h1>
            <ul>
                <li>慕课网软件测试讨论群: 提建议是不是想死?</li>
                <li>慕课网Python讨论群: 用户体验差?</li>
                <li>慕课网IOS开发讨论群: 都是组长的锅!</li>
                <li>慕课网安卓讨论群: 辣毁</li>
                <li>慕课网夹娃讨论群: 鸡我</li>
                <li>慕课网歪脖讨论群: 代青</li>
                <li>慕课网簧片讨论群: 码春</li>
            </ul>
        </div>
    </div>

@endsection