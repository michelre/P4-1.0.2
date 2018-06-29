	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">EPISODES</th>
      <th scope="col ml-1 ">TITRES</th>
      <th scope="col">EXTRAITS</th>
    </tr>
  </thead>
  <tbody>
	  	   <?php foreach ($articles as $article) { ?>
    <tr>
      <th scope="row"><?php echo $article->getId();?></th>
      <td><a href="?action=detailArticle&articleId=<?php echo $article->getId(); ?>"><?php echo $article->getTitle() ?></a></td>
      <td><?php echo $article->getContent() ?></td>
    </tr>
		</tbody>
	<?php } ?>
	</table>