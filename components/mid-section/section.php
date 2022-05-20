<section class="main__section">
    <div class="articles__div">
        <article class="section__article">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, illo accusantium veritatis repellendus alias ipsam voluptatum repudiandae porro? Optio, veritatis nobis. Impedit minus voluptates pariatur, omnis suscipit itaque libero facere.
            <button class="article__button__see">See more</button>
        </article>
        <article class="section__article">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, illo accusantium veritatis repellendus alias ipsam voluptatum repudiandae porro? Optio, veritatis nobis. Impedit minus voluptates pariatur, omnis suscipit itaque libero facere.
            <button class="article__button__see">See more</button>
        </article>
        <article class="section__article">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, illo accusantium veritatis repellendus alias ipsam voluptatum repudiandae porro? Optio, veritatis nobis. Impedit minus voluptates pariatur, omnis suscipit itaque libero facere.
            <button class="article__button__see">See more</button>
        </article>
    </div>
    <aside class="aside">
        <navbar class="aside__navbar">

            <?php
                if (!isset($_SESSION['email'])) {
                    echo "<ul class='navbar__list'>
                                <li class='navbar__elements'>Lorem ipsum</li>
                                <li class='navbar__elements'>Lorem ipsum</li>
                                <li class='navbar__elements'>Lorem ipsum</li>
                                <li class='navbar__elements'>Lorem ipsum</li>
                            </ul>";
                } else {
                    echo "
                        <form class='form__createPost'> 
                            <input type='text' class='input__titlePost' placeholder='Post title' />
                            <textarea class='textarea__postContent' placeholder='Write the post'></textarea>
                            <button class='button__createPost' type='submit'>Create post</button>
                        </form>
                        ";

                        echo "<ul class='navbar__list'>
                                <li class='navbar__elements'>Lorem ipsum</li>
                                <li class='navbar__elements'>Lorem ipsum</li>
                                <li class='navbar__elements'>Lorem ipsum</li>
                                <li class='navbar__elements'>Lorem ipsum</li>
                            </ul>";
                }
            ?>

        </navbar>
    </aside>
</section>