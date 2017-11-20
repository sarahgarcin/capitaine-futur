<?php
 return [
   'name'        => 'Miranda',
   'default'     => false,
   'permissions' => [
     'panel.page.*' => false,
     'panel.page.read' => function() {
       if($this->target()->page()->uid() === 'les-oeuvres' || $this->target()->page()->uid() === 'the-edge-of-chaos' ||  $this->target()->page()->template() === 'sectionblog' ||  $this->target()->page()->intendedTemplate() === 'article') return true;
     },
    'panel.page.create' => function(){
    if($this->target()->page()->uid() === 'the-edge-of-chaos' || $this->target()->page()->template() === 'sectionblog' ||  $this->target()->page()->intendedTemplate() === 'article') return true;
    },
		'panel.page.update' => function(){
			if($this->target()->page()->uid() === 'the-edge-of-chaos' ||  $this->target()->page()->template() === 'sectionblog' ||  $this->target()->page()->intendedTemplate() === 'article') return true;

		},
		 'panel.page.delete' => function(){
    if($this->target()->page()->uid() === 'the-edge-of-chaos' || $this->target()->page()->template() === 'sectionblog' ||  $this->target()->page()->intendedTemplate() === 'article') return true;
    },
		'panel.page.visibility' => function(){
			if($this->target()->page()->uid() === 'the-edge-of-chaos' ||  $this->target()->page()->template() === 'sectionblog' ||  $this->target()->page()->intendedTemplate() === 'article') return true;

		},
     'panel.file.upload' => function() {
     		if($this->target()->page()->uid() === 'the-edge-of-chaos' || $this->target()->page()->template() === 'sectionblog' ||  $this->target()->page()->intendedTemplate() === 'article') return true;
     },
     'panel.file.replace' => function() {
     		if($this->target()->page()->uid() === 'the-edge-of-chaos' || $this->target()->page()->template() === 'sectionblog' ||  $this->target()->page()->intendedTemplate() === 'article') return true;
     },
     'panel.file.update' => function() {
     		if($this->target()->page()->uid() === 'the-edge-of-chaos' || $this->target()->page()->template() === 'sectionblog' ||  $this->target()->page()->intendedTemplate() === 'article') return true;
     },
     'panel.file.sort' => function() {
     		if($this->target()->page()->uid() === 'the-edge-of-chaos' || $this->target()->page()->template() === 'sectionblog' ||  $this->target()->page()->intendedTemplate() === 'article') return true;
     },
     'panel.file.delete' => function() {
     		if($this->target()->page()->uid() === 'the-edge-of-chaos' || $this->target()->page()->template() === 'sectionblog' ||  $this->target()->page()->intendedTemplate() === 'article') return true;
     }
   ]
 ];