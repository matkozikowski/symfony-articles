<?php

/* MyBackendBundle:Articles:index.html.twig */
class __TwigTemplate_c89904250be1be77a1ba3fdb9c3b57fb9f59d29657e020ce5394faaa98615c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Admin Panel - Articles list";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css\">
<style>
    #sortable1, #sortable2 {
        border: 1px solid #eee;
        width: 142px;
        min-height: 20px;
        list-style-type: none;
        margin: 0;
        padding: 5px 0 0 0;
        float: left;
        margin-right: 10px;
    }
    #sortable1 li, #sortable2 li {
        margin: 0 5px 5px 5px;
        padding: 5px;
        font-size: 1.2em;
        width: 120px;
    }
</style>
";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "<div class=\"col-xs-12 col-md-12\">
    <blockquote>
        <p>Sort Articles</p>
        <footer>Please drag and drop the single article into category</footer>
    </blockquote>
    <div class=\"articles-content\">

        ";
        // line 39
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MyBackendBundle:Articles:ajaxView", array("max" => 3)));
        echo "

    </div>
    <a id=\"save-change\" class=\"btn btn-success\" href=\"#sort\">Save Changes</a>
</div>

<div class=\"col-xs-12 col-md-12\">
    <a class=\"btn btn-default\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("articles_new");
        echo "\">
        Create a new article
    </a>
</div>

";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "
<script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
<script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
<script>
    \$(function() {

        \$('#save-change').on('click', function(){
            var articlesNews = [];
            var articlesImportant = [];

            \$('#sortable1 li').each(function( index ) {
                articlesNews.push({
                                    \"id\" : \$(this).data('id'),
                                    \"sort\" : index
                                });
            });

            \$('#sortable2 li').each(function( index ) {
                articlesImportant.push({
                                    \"id\" : \$(this).data('id'),
                                    \"sort\" : index
                                });
            });

            var data = {
                1 : JSON.stringify(articlesNews),
                2 : JSON.stringify(articlesImportant)
            };

            \$.ajax({
                type: \"POST\",
                url: '";
        // line 86
        echo $this->env->getExtension('routing')->getPath("ajax_articles");
        echo "',
                contentType: 'application/json; charset=UTF-8',
                data: JSON.stringify(data),
                 success: function(data) {
                    var data = JSON.parse(data);
                    if( data.status ){
                        \$('.articles-content').html(data.html);
                    }
                    
                }    
            });

            return false;
          
       })
    });

</script>

";
    }

    public function getTemplateName()
    {
        return "MyBackendBundle:Articles:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 86,  98 => 55,  95 => 54,  85 => 46,  75 => 39,  66 => 32,  63 => 27,  40 => 6,  37 => 5,  31 => 3,);
    }
}
