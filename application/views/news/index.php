<?php foreach ($news as $news_item): ?>
    <h2><?php echo $news_item['title']; ?></h2>
    <div id="main">
        <?php echo $news_item['text']; ?>
    </div>
    <p><a href="http://localhost/ci/index.php/news/view/<?php echo $news_item['slug']?>"> View article</a></p>

<?php  endforeach  ?>
<br/>
<p><a href="http://localhost/ci/index.php/news/create"> Create article</a></p>
<br/>
