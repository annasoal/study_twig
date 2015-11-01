<?php


namespace Controller;

class Page
    extends Base
{

    protected function action_main()
    {
        $this->page->title = 'Главная';
        $this->page->heading = 'Добро пожаловать в наш Интернет-магазин';
        $this->page->content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at atque, dolor dolores
         eius harum itaque laborum, maiores molestiae praesentium sapiente sequi similique veritatis voluptas!
          Aliquid deleniti nemo voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at atque, dolor dolores
         eius harum itaque laborum, maiores molestiae praesentium sapiente sequi similique veritatis voluptas!
          Aliquid deleniti nemo voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at atque, dolor dolores
         eius harum itaque laborum, maiores molestiae praesentium sapiente sequi similique veritatis voluptas!
          Aliquid deleniti nemo voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at atque, dolor dolores
         eius harum itaque laborum, maiores molestiae praesentium sapiente sequi similique veritatis voluptas!
          Aliquid deleniti nemo voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at atque, dolor dolores
         eius harum itaque laborum, maiores molestiae praesentium sapiente sequi similique veritatis voluptas!
          Aliquid deleniti nemo voluptatibus?';
        $this->template = 'main.html';
        echo $this->view->render($this->template, ['page' => $this->page]);


    }

    protected function action_about()
    {
        $this->page->title = 'О нас';
        $this->page->heading = 'Мы лучшие в мире...';
        $this->page->content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at atque, dolor dolores
         eius harum itaque laborum, maiores molestiae praesentium sapiente sequi similique veritatis voluptas!
          Aliquid deleniti nemo voluptatibus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at atque, dolor dolores
         eius harum itaque laborum, maiores molestiae praesentium sapiente sequi similique veritatis voluptas!
          Aliquid deleniti nemo voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at atque, dolor dolores
         eius harum itaque laborum, maiores molestiae praesentium sapiente sequi similique veritatis voluptas!
          Aliquid deleniti nemo voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at atque, dolor dolores
         eius harum itaque laborum, maiores molestiae praesentium sapiente sequi similique veritatis voluptas!
          Aliquid deleniti nemo voluptatibus?';
        $this->template = 'other.html';
        echo $this->view->render($this->template, ['page' => $this->page]);

    }
    protected function action_p404()
    {
        $this->page->title = 'Страница не найдена';
        $this->page->heading = 'Ошибка 404';
        $this->page->content = 'Запрашиваемая страница отсутствует на сайте';
        $this->template = 'main.html';
        echo $this->view->render($this->template, ['page' => $this->page]);

    }

}