<?php
    if (!isset($books)) {
        return;
    }
    ?>
<article class="main">
    <!-- section 1 -->
    <section>
        <div class="container">
            <div class="row">
                <?php if (isset($books)):?>
                <?php foreach ($books as $book): ?>
                <div class="card cols">
                    <!-- <div class="card-image img-container"> -->
                    <!-- <div class="img-container"> -->
                    <!-- <img src="/upload/books/" alt="alternative">
                                <div class="overlay">
                                    <div class="details">"" <br><br> by </div>
                                </div> -->
                    <!-- </div></div> -->
                    <book-element
                        cover="<?php echo Utility::baseURL()?>/upload/book/<?php echo $book->coverPic;?>"
                        book="<?php echo $book->name; ?>"
                        author="<?php echo $book->authors;?>"
                        id="<?php echo $book->id;?>">
                    </book-element>

                    <div class="card-content">
                        <h3><?php echo $book->name?>
                        </h3>
                        <div class="text-author"><?php echo $book->authors;?>
                        </div>
                        <p><?php echo $book->description;?>
                        </p>
                        <p>only <?php echo $book->available;?>
                            <?php echo ($book->available == 1) ? "copy" : "copies"; ?>
                            available</p>
                        <div class="btn-container">
                            <a class="btn-link"
                                href="/book/view/<?php echo $book->id;?>">View
                                Book</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <?php endif;?>
            </div>
            <!-- show more button -->
            <div class="btn-container" id="loadMore">
                <a class="btn-link" href="#">SHOW MORE</a>
            </div>
    </section>
</article>
<script>
    document.getElementById("books").className += " active";
</script>