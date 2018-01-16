<?php
class NewsField extends CheckboxesField {

  public $search = false;

  public static $assets = [
    'css' => [
      'style.css'
    ],
    'js' => [
      'script.js'
    ]
  ];

  public function __construct() {
    $this->icon = 'chevron-down';
    $this->label   = 'category';
    $this->options = array();
  }

  // public function options() {
  //   return FieldOptions::build($this);
  // }

  // public function option($value, $text, $selected = false) {
  //   return new Brick('option', $this->i18n($text), array(
  //     'value'    => $value,
  //     'selected' => $selected
  //   ));
  // }

  public function input() {
    $value = func_get_arg(0);
    $input = parent::input($value);
    return str_replace('required', '', $input);
  }

  public function item($value, $text) {

    $label = new Brick('label');
    $label->addClass('input');
    $label->attr('data-focus', 'true');

    $text = new Brick('span', $this->i18n($text));
    $label->prepend($text);

    $input = $this->input($value);
    $label->prepend($input);

    if($this->readonly) {
      $label->addClass('input-is-readonly');
    }

    return $label;

  }

  public function content() {

    $display = new Brick('div');
    $display->addClass('input display');

    if($this->readonly()) {
      $display->addClass('input-is-readonly');
    }

    $display->attr(array(
      'tabindex' => 0
    ));

    $display->data(array(
      'field'    => 'multiselect',
      'search'   => $this->search ? 1 : 0,
      'readonly' => ($this->readonly or $this->disabled) ? 1 : 0
    ));

    $display->append('<div class="placeholder">&nbsp;</div>');

    $wrapper = new Brick('div');
    $wrapper->addClass('field-content input-with-multiselect');
    $wrapper->append($display);
    $wrapper->append($this->dropdown());
    $wrapper->append($this->icon());

    return $wrapper;

  }

  public function dropdown() {
    $dropdown = new Brick('div');
    $dropdown->addClass('list');

    $list = new Brick('ul');
    $item = new Brick('li');
    $item->addClass('list-item');
    $news = $this->page->parent()->children()->visible()->index();
    $newsSelection = array();
    foreach($news as $key => $new)  {
      if($new->actu() == 'oui'):
        $this->options[] = $new->uid();
        // $newsSelection[$key]['uid'] = $new->uid();
        // $newsSelection[$key]['title'] = $new->title();
      endif;
    }

    foreach($this->options() as $key => $value) {
      $item->html($this->item($key, $value));
      $list->append($item);
    }
    $dropdown->append($list);

    if($this->search) {
      $dropdown->prepend('<input class="search-bar" placeholder="Type to filter options">');
    }

    return $dropdown;
  }


  public function label() {
    $label = parent::label();
    $label->attr('for', '');
    return $label;
  }
}

// class NewsField extends BaseField {


//   public function content(){
//     $wrapper = new Brick('div');
//     $wrapper->addClass('news-panel');
//     $wrapper->data(array(
//         'field'      => 'news',
//         'name'       => $this->name(),
//         // 'page'       => $this->page(),
//         // 'mode'       => $this->mode,
//         // 'autoselect' => $this->autoselect(),
//         // 'size'       => $this->size,
//     ));
//     $wrapper->html(tpl::load(__DIR__ . DS . 'template.php', array('field' => $this)));

//     return $wrapper;
//   }

//   public function __set($option, $value){
//     /* Set given value */
//     $this->$option = $value;
//   }

//   public function value(){
//       if (is_string($this->value)) {
//           $this->value = str::split($this->value, ',', 1);
//       }

//       return $this->value;
//   }



//   // public function news(){
//   //   $allPages = $this->page->parent()->children()->visible()->index();
//   //   $news = array();
//   //   foreach($allPages as $all):
//   //     if($all->news() == 'oui'):
//   //       $news[] = $all->title();
//   //     endif;
//   //   endforeach;
//   //   return $news;
//   // }


//   public function news(){
//     $field = &$this;
//      //$news = $this->page; 
//      // $news = $this->page->parent()->find('actu','page', 'projet')->visible();
//      $news = $this->page->parent()->children()->visible()->index();
//      // $news = $news -> index();
//      // foreach($news as $new): 
//      //  //print($new->title().'   caca  ');
//      // endforeach; 
//     // actu + page + projet
//     //$site->find('actu','page', 'projet')->visible()
//      // $this->$site->find('actu','page', 'projet')->visible()->news();
//     return $news;
//   }
// }
