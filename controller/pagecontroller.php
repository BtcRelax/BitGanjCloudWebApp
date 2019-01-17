<?php
 namespace OCA\BitGanjCloud\Controller;

 use OCP\IRequest;
 use OCP\AppFramework\Http\TemplateResponse;
 use OCP\AppFramework\Controller;

 class PageController extends Controller {

     public function __construct($AppName, IRequest $request){
         parent::__construct($AppName, $request);
     }

     /**
      * @NoAdminRequired
      * @NoCSRFRequired
      */
     public function index() {
          //return ['test' => 'hi'];
          return new TemplateResponse('bitganjcloud', 'main');
     }

 }