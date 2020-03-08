<?php

/* Template Name: Catalog 
* @package WordPress
* @subpackage Meat-store
*/

get_header();?>

<div class="catalog-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class=col-lg-2>
                <div class="filters">
                    <div class="price slider">
                        <h5 class="pt-3 pb-4">Pret</h5>
                        <div class="slidecontainer">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                            <span>70 lei</span> - <span>350 lei</span>
                        </div>
                    </div>
                    <div class="category-1">
                        <h5 class="pt-3 pb-4">Gama de produse</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="proudct-listing">

                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>