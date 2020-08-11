<?php
//paginação estruturada
        $config = array(
            "base_url" => base_url('pagina_principal/'),
            "per_page" => 6,
            "num_links" => 5,
            "uri_segment" => 2,
            "total_rows" => $this->Nome_model->CountAll(),
            "full_tag_open" => "<ul class='pagination justify-content-center'>",
            "full_tag_close" => "</ul>",
            "first_link" => false,
            "last_link" => false,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "Anterior",
            "prev_tag_open" => "<li class='prev page-item page-link'>",
            "prev_tag_close" => "</li>",
            "next_link" => "Próxima",
            "next_tag_open" => "<li class='next page-item page-link'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active page-item' aria-current='page'><a class='page-link' href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li class='page-item page-link'>",
            "num_tag_close" => "</li>"

        );
        $this->pagination->initialize($config);
        $dados['pagination'] = $this->pagination->create_links();
        $offset = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $dados['passamento_variavel'] = $this->Nome_model->get($config['per_page'], $offset);