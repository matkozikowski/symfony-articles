<?php

/* MyBackendBundle:Articles:edit.html.twig */
class __TwigTemplate_28c77d6a7c13738287c403b1b60ee40383e9990ae53a00954104de5882b556f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Admin Panel - Articles edit";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"col-xs-12 col-md-12\">
\t    <blockquote>
\t        <p>Articles creation</p>
\t    </blockquote>
\t    <div class=\"articles-content\">
\t    
\t    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("articles_create"), "method" => "post"));
        echo "
        \t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
            <div class=\"form-group\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "createAt", array()), 'label');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "createAt", array()), 'errors');
        echo "
\t\t        <div class=\"form-group\">
\t\t            <div class='input-group date' id='datetimepicker1'>
\t\t                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "createAt", array()), 'widget', array("attr" => array("class" => "form-control", "data-date-format" => "YYYY-MM-DD hh:mm:ss")));
        echo "
\t\t                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span>
\t\t                    </span>
\t\t            </div>
\t\t        </div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categories", array()), 'label');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categories", array()), 'errors');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'label');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

        ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

\t    <a class=\"btn btn-default\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("articles");
        echo "\">
\t        Back to the list
\t    </a>
\t    </div>

    \t<hr />
   \t\t
   \t\t";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
\t</div>

";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "\t
\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
\t
\t<script type=\"text/javascript\">
\t

     \$(document).ready(function(){
        \$(\"#datetimepicker1\").datetimepicker({pickTime: false});
    });
\t</script>

";
    }

    public function getTemplateName()
    {
        return "MyBackendBundle:Articles:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 62,  150 => 61,  147 => 60,  144 => 59,  136 => 54,  126 => 47,  121 => 45,  115 => 42,  111 => 41,  107 => 40,  100 => 36,  96 => 35,  92 => 34,  81 => 26,  75 => 23,  71 => 22,  64 => 18,  60 => 17,  56 => 16,  51 => 14,  47 => 13,  39 => 7,  36 => 5,  30 => 3,);
    }
}
