<?

    $data         = Timber::get_context();
    $data['post'] = Timber::get_post();

	Timber::render('single-hqs.twig', $data);
