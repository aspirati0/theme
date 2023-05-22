 <?php
/*
Template Name: News
*/
?>

<style>
        body {
            background: #2f2e2e;
        }

        a {
            color: #c89600;
            text-decoration-color: #c89600;
            text-decoration-thickness: 5px;
        }

        @media(min-width: 800px) {
            .news {
                margin-left: 20%;
                margin-right: 20%;
            }

            .news-h1 {
                margin-top: 100px;
                padding-left: 20%;
            }
			
			.news > p > iframe {
				height: 70%;
			}
        }

        .news {
            background: white;
            border-radius: 10px;
            padding: 0.7em 3.2em;
            margin-bottom: 1.5em;
            overflow-wrap: break-word;
        }

	.news > img, .news > p > img {
		max-width: 100%;
	}
	
	.news > p > iframe {
		width: 100%;
	}
	
	@media (min-width: 800px) and (max-width: 1600px) {
		
	}
	
	@media (min-width: 1600px) {
		.news {
			margin-left: 28%;
			margin-right: 28%;
		}
		
		.news-h1 {
			padding-left: 28%;
		}
	}
		

    @media(max-width: 800px) {
            .news {
                padding-left: 1em;
                padding-right: 1em;
            }
		
		.news > p > iframe {
				height: 30%;
			}
		
		.news-h1 {
			margin-left: 8%;
		}
            .news {
	            margin-left: 1.8em;
                margin-right: 1.8em;
            }

	.news-h1 {
		margin-top: 170px;
	}

        }

        .news-h1 {
            font-family: 'Azonix', sans-serif;
            font-size: 50px;
            color: #c89600;
        }

       .news > p {
		font-size: 16px;
       }

        .date {
            color: gray;
        }

</style>

<?php
get_header();
query_posts(array(
   'post_type' => 'news'
)); ?>

<h1 class="news-h1">News</h1>

<?php
while (have_posts()) : the_post(); ?>
<div class="news">
    <p class="date"><?php echo get_the_date(); ?></p>
    <p><?php the_content(); ?></p>
</div>

<?php endwhile;
get_footer();
?>