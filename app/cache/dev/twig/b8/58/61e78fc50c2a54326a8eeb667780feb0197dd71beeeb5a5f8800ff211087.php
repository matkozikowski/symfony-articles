<?php

/* MyFrontendBundle:Default:show.html.twig */
class __TwigTemplate_b85861e78fc50c2a54326a8eeb667780feb0197dd71beeeb5a5f8800ff211087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<article class=\"col-xs-12 col-sm-12 article\">
        
            <div class=\"date\">
                <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>
                ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
            </div>
            <h1 class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "title", array()), "html", null, true);
        echo "</h1>
            <p>
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "content", array()), "html", null, true);
        echo "
            </p>
            <a class=\"btn btn-default\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("main_page");
        echo "\">
                Back to the list
            </a>
    </article>

";
    }

    public function getTemplateName()
    {
        return "MyFrontendBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  47 => 13,  42 => 11,  37 => 9,  31 => 5,  28 => 3,);
    }
}
