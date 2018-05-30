<footer>
    <section class="bg-blue section-wrap">
        <div class="footer">
            <div class="footer-products">
                <h4>
                    <?php pll_e('Public Cloud Apps'); ?>
                </h4>
                <ul>
                    <li><a href="/apps/simright-simulator"><?php pll_e('Simulator - Structural Analysis'); ?></a></li>
                    <li><a href="/apps/simright-toptimizer"><?php pll_e('Toptimizer - Topology Optimization'); ?></a></li>
                    <li><a href="/apps/simright-webmesher"><b><?php pll_e('WebMesher – Pre-processor'); ?></b></a></li>
                    <li><a href="/apps/simright-viewer"><?php pll_e('Viewer - CAD/CAE model viewer'); ?></a></li>
                    <li><a href="/apps/simright-converter"><?php pll_e('CAE Converter - CAE model converter'); ?></a></li>
                    <li><a href="/apps/simright-cad-converter"><?php pll_e('CAD Converter - CAD model converter'); ?></a></li>
                    <li><a href="/apps/simright-threemagic"><?php pll_e('ThreeMagic - STL editor for 3D printing'); ?></a></li>
                    <?php if(pll_current_language()=="zh"): ?>
                    <li class="sub-app"><a href="http://www.easypdm.cn" target="_blank">EasyPDM - 在线三维数据协同</a></li>
                    <?php endif ?>
                </ul>
            </div>
            <div class="footer-resources">
                <h4><?php pll_e('Resources'); ?></h4>
                <ul>
                    <li><a href="/resources/public-projects"><?php pll_e('Public Projects'); ?></a></li>
                    <li><a href="/<?php echo pll_current_language() ?>/category/customer-story"><?php pll_e('User Stories') ?></a></li>
                    <li><a href="/resources/model-library"><?php pll_e('Model Library'); ?></a></li>
                    <li><a href="/<?php echo pll_current_language() ?>/category/partners"><?php pll_e('Partners'); ?></a></li>
                </ul>
            </div>
            <div class="footer-learning">
                <h4>
                    <?php pll_e('Learning'); ?>
                </h4>
                <ul>
                    <li><a href="/<?php echo pll_current_language() ?>/category/video"><?php pll_e('Video Library'); ?></a></li>
                    <li><a href="/changelog" ><?php pll_e('Changelog'); ?></a></li>
                    <li><a href="/<?php echo pll_current_language() ?>/category/features" ><?php pll_e('Features'); ?></a></li>
                </ul>
            </div>
            <div class="footer-about">
                <h4> 
                    <?php pll_e('About'); ?>
                </h4>
                <ul>
                    <li><a href="/contact_us"><?php pll_e('Contact Us'); ?></a></li>
                    <li><a href="/<?php echo pll_current_language() ?>/category/joinus"><?php pll_e('Join Us'); ?></a></li>
                    <li><a href="/<?php echo pll_current_language() ?>/category/news"><?php pll_e('News'); ?></a></li>
                    <li><a href="/security"><?php pll_e('Security'); ?></a></li>
                </ul>
            </div>
            <div class="footer-follow">
                <h4><?php pll_e('Follow Us'); ?></h4>
                <div>
                    <a href="https://www.facebook.com/Simright-1913454768934744" target="_blank"><img src="https://oss.simright.com/images/contact-facebook.svg" alt="Facebook"></a>
                    <a href="https://twitter.com/simright" target="_blank"><img src="https://oss.simright.com/images/contact-twiiter.svg" alt="Twitter"></a>
                    <a href="//shang.qq.com/wpa/qunwpa?idkey=15506675f16f72139d7c9632c62ac0f567fde75cdad3570137f31ac7bfce7624" target="_blank"><img src="https://oss.simright.com/images/contact-qq.svg" alt="QQ"></a>
                    <a href="http://weibo.com/u/6210090560" target="_blank"><img src="https://oss.simright.com/images/contact-weibo.svg" alt="Weibo"></a>
                    <a href=" https://www.linkedin.com/company-beta/13345726/" target="_blank"><img src="https://oss.simright.com/images/contact-insgram.svg" alt="In"></a>
                    <a href="http://www.toutiao.com/c/user/59020482121/" target="_blank"><img src="https://oss.simright.com/images/contact-toutiao.svg" alt="Toutiao"></a>
                    <a href="http://i.youku.com/simright" target="_blank"><img src="https://oss.simright.com/images/contact-youku.svg" alt="Youku"></a>
                    <a href="https://www.youtube.com/channel/UCEiDfhLf7jFWJkPhhdwpW3g" target="_blank"><img src="https://oss.simright.com/images/contact-youtube.svg" alt="Youtube"></a>
                </div>
                <?php $current_lan = pll_current_language(); if($current_lan == 'en'): ?>
                    <img src="https://oss.simright.com/images/rq_code_blue.png" alt="" class="wechat_qr_code hide ">
                <?php else : ?>
                    <img src="https://oss.simright.com/images/rq_code_blue.png" alt="" class="wechat_qr_code ">
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="clearfix copyright">
        <p class="text-center">
            Copyright © 2018 Simright Information Technology Co.,Ltd. All Rights Reserved.
        <p class="text-center">Powered By <a rel="external" title="WordPress" class="link" href="http://wordpress.org/">WordPress</a></p>
    </section>
</footer>
</body>
<script>
    document.documentElement.style.fontSize = document.documentElement.clientWidth / 6.4 + 'px';
</script>
<script src="https://oss.simright.com/static/jquery.min.js"></script>
<script src="https://oss.simright.com/static/siema.min.js"></script>
<script>
    initSwiper()
    function initSwiper(){
        
        if($('#pre-process')){
            //前处理
            var preProcess = new Siema({
                selector: '#pre-process .contain',
                duration: 200,
                easing: 'ease-out',
                perPage: {
                    640: 1, // 2 items for viewport wider than 800px
                    1240: 3 ,
                },
                startIndex: 0,
                draggable: true,
                multipleDrag: true,
                threshold: 20,
                loop: true,
                rtl: false,
                onInit: () => {},
                onChange: () => {},
            });
            $('#pre-process .prev').on('click', () => preProcess.prev());
            $('#pre-process .next').on('click', () => preProcess.next());
        }
        if($('#next-process')){
        //后处理
            var nextProcess = new Siema({
                selector: '#next-process .contain',
                duration: 200,
                easing: 'ease-out',
                perPage: {
                    640: 1, // 2 items for viewport wider than 800px
                    1240: 3 ,
                },
                startIndex: 0,
                draggable: true,
                multipleDrag: true,
                threshold: 20,
                loop: true,
                rtl: false,
                onInit: () => {},
                onChange: () => {},
            });
            $('#next-process .prev').on('click', () => nextProcess.prev());
            $('#next-process .next').on('click', () => nextProcess.next());
        }
        if($('#solve')){
            //解决
            var solveProcess = new Siema({
                selector: '#solve .contain',
                duration: 200,
                easing: 'ease-out',
                perPage: {
                    640: 1, // 2 items for viewport wider than 800px
                    1240: 3 ,
                },
                startIndex: 0,
                draggable: true,
                multipleDrag: true,
                threshold: 20,
                loop: true,
                rtl: false,
                onInit: () => {},
                onChange: () => {},
            });
            $('#solve .prev').on('click', () => solveProcess.prev());
            $('#solve .next').on('click', () => solveProcess.next());
        }
        if($('#example')){
            //实例
            var exampleProcess = new Siema({
                selector: '#example .contain',
                duration: 200,
                easing: 'ease-out',
                perPage: {
                    640: 2, // 2 items for viewport wider than 800px
                    1240: 4 ,
                },
                startIndex: 0,
                draggable: true,
                multipleDrag: true,
                threshold: 20,
                loop: true,
                rtl: false,
                onInit: () => {},
                onChange: () => {},
            });
            $('#example .prev').on('click', () => exampleProcess.prev());
            $('#example .next').on('click', () => exampleProcess.next());
        }
    }
</script>
</html>
