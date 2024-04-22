<?php



if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$edit = filter_input(INPUT_GET, 'edit', FILTER_VALIDATE_INT);
	$comment_id = filter_input(INPUT_GET, 'comment_id', FILTER_VALIDATE_INT);
	$comment = filter_input(INPUT_POST, 'comment');
	$comment = trim($comment);

	if($edit === 1) {
		$cms->getComment()->updateComment($comment_id, $comment);
		redirect(DOC_ROOT . 'article/' . $id);
	}
	$user_id = filter_input(INPUT_GET, 'user_id', FILTER_VALIDATE_INT);
	$cms->getComment()->addComment($id, $user_id, $comment);
	redirect(DOC_ROOT . 'article/' . $id);
}else {
	$comment_id = filter_input(INPUT_GET, 'comment_id', FILTER_VALIDATE_INT);
	$comment = $cms->getComment()->getCommentById($comment_id);
	$navigation = $cms->getCategory()->fetchNavigation();
	echo $twig->render('edit-comment.html', ['navigation' => $navigation, 'comment' => $comment]);
}

