
<section class="" id="">
        <div class="container">
            <div class="wrraper-content">
                <div class="intro-picture">

                    <div class="photos">
                        <img  class="header_picture" src="/assets/img/Liefes.png" alt="">
                        <img   src="/assets/img/forSlider1.png" alt="">
                        <img   src="/assets/img/forSlider2.jpg" alt="">
                    </div>

                    <div class="buttons">
                        <button class="prev">prev</button>
                        <button class="next">next</button>
                    </div>

                </div>
                <div class="header-pic">
                    <img  src="/assets/img/Frame 150.png" alt="">
                </div>
             </div>  <!--wrraper-content -->

             <div class="wrraper-choose">
                <div class="all-prod">
                    <h2>Our products.</h2>
                </div>
                <nav class="choose-prod">
                    <ul class="menu_list">
                        <li> <a href="/Seedra" class="forSort">Sort by price</a> 
                        <span class="menu_arrow arrow"></span>
                            <ul class="sub-menu1">
                                <li>                          
                                <a  class="sort" href="index.php?sort_by=most_expensive">Most expensive</a> 
                                </li>
                                <div class="v3"></div>
                                <li > <a class="sort" href="index.php?sort_by=most_chep">Most cheap</a> </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
             </div>

             <div class="our-prod">
                <ul class="main-menu">
                    <li><a href="#"><img src="/assets/img/liefs-chooce.png" alt="">ALL</a></li>
                    <li><img src="/assets/img/bundles.png" alt=""><a href="#">BUNDLES</a>
                        <ul class="sub-menu">
                            <li><a class="sub-menu-link" href="https://www.google.com.ua/">ALL BUNDLES</a></li>
                            <div class="v3"></div>
                            <li><a class="sub-menu-link" href="">BUNDLES VEGETABLES</a></li>
                        </ul>
                    </li>
                    <li><img src="/assets/img/heart.png" alt=""><a href="#">HERBS</a>
                        <ul class="sub-menu">
                            <li><a class="sub-menu-link" href="https://www.google.com.ua/">ALL HERBS</a></li>
                            <div class="v3"></div>
                            <li><a class="sub-menu-link" href="">BUNDLES HERBS</a></li>
                        </ul>
                    </li>
                    <li><img src="/assets/img/vegetabless.png" alt="#"><a class="veg" href="#">VEGETABLES</a>
                        <ul class="sub-menu">
                            <li><a class="sub-menu-link" href="https://www.google.com.ua/">ALL VEGETABLES</a></li>
                            <div class="v3"></div>
                            <li><a class="sub-menu-link" href="">CART VEGETABLES</a></li>
                        </ul>
                    </li>
                    <li><img src="/assets/img/fruits.png" alt=""><a href="#">FRUITS</a>
                        <ul class="sub-menu">
                            <li><a class="sub-menu-link" href="https://www.google.com.ua/">ALL FRUITS</a></li>
                            <div class="v3"></div>
                            <li><a class="sub-menu-link" href="">CART FRUITS</a></li>
                        </ul>
                    </li>
                    <li><img src="/assets/img/gardening tool.png" alt=""><a href="#">SUPPLIES</a>
                        <ul class="sub-menu">
                            <li><a class="sub-menu-link" href="https://www.google.com.ua/">ALL SUPPLIES</a></li>
                            <div class="v3"></div>
                            <li><a class="sub-menu-link" href="">BUNDLES SUPPLIES</a></li>
                        </ul>
                    </li>
                    <li><img src="/assets/img/Flower (2).png" alt=""><a class="veg" href="#">FLOWERS</a>
                        <ul class="sub-menu">
                            <li><a class="sub-menu-link" href="https://www.google.com.ua/">ALL FLOWERS</a></li>
                            <div class="v3"></div>
                            <li><a class="sub-menu-link" href="">BUNDLES FLOWERS</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
             <div class="dateWhitBD">
        <?php

            $sql = "SELECT * FROM catalog 
            JOIN products ON catalog.id_product = products.id
            JOIN category ON catalog.id_category = category.id ORDER BY id_product ";
            $result = $db->prepare($sql);
            $result->execute();

            if(isset($_GET['sort_by'])){
                if($_GET['sort_by'] == 'most_expensive'){
                    $sql = "SELECT * FROM catalog 
            JOIN products ON catalog.id_product = products.id
            JOIN category ON catalog.id_category = category.id ORDER BY price DESC";

                    $result = $db->prepare($sql);
                    $result->execute();

                }elseif($_GET['sort_by'] == 'most_chep'){
                    $sql = "SELECT * FROM catalog 
            JOIN products ON catalog.id_product = products.id
            JOIN category ON catalog.id_category = category.id ORDER BY price ";
                    $result = $db->prepare($sql);
                    $result->execute();
                }
            }
            $row = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach ($row as $key => $value):?>

                <div class="products">
                    <form action="">
                        <div class="likePost">
                            <a href="/partials/like.php?id=<?= $value['id_product']; ?>"> <img src="/assets/img/<?= $value['imageLike']; ?>" alt=""></a>
                        </div>
                        <img src="/assets/img/<?php echo $value['img']; ?>" alt="">
                        <div class="products-title"><a href="#"><?php echo $value['name']; ?></a></div>
                        <div class="products-but-price">
                            <div class="price"><?php echo $value['price']; ?>$</div>
                            <div>
                                <button id="addToCart_<?php echo $value['id_product']; ?>"
                                 class="buy" onclick="addToCart(<?= $value['id_product']; ?>); return false";>
                                 Buy Now
                            </button>
                            </div>
                        </div>
                    </form>
                </div>

        <?php endforeach; ?>

             </div>
             <div class="grow-fast">
                <div class="rew">
                    <h2>Seedra helps to grow fast and efficiant</h2>
                    <p>
                         SEEDRA Spinach Seeds - contains 600 seeds in 2 Packs and professional instructions created by PhD Helga George
                        <p class="p1">
                            Be sure of our quality - the freshest batches of this season. Non-GMO, Heirloom - our seeds were tested and have the best germination ratings. 
                            Your easy growing experience is our guarantee
                            Spinach commom culinary uses: salads, soups, smoothies, lasagne, pizza, pies, risotto, and more
                        </p>
                        
                        <p class="p1">
                            Proudly sourced in the USA - our garden seeds are grown, harvested, and packaged in the USA. We support local farmers and are happy to produce this American-made product
                        </p>
                        
                </div>
                <div class="pictureW">
                    <img src="/assets/img/Ellipse 2.png" alt="">
                </div>
             </div>
             

            <div class="clients">
                <div class="review">
                    <h2>What out clients say</h2>
                    <form class="formForReview" action="">
                        <input  class="buttonForReview" type="submit" value="Add Review">
                    </form>
                </div>
            </div>


         </div> <!--container -->
    </section>

