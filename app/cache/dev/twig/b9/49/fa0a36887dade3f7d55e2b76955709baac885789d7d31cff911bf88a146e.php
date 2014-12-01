<?php

/* MyFrontendBundle:Default:index.html.twig */
class __TwigTemplate_b949fa0a36887dade3f7d55e2b76955709baac885789d7d31cff911bf88a146e extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Frontend";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<ul class=\"nav nav-tabs\" role=\"tablist\" id=\"myTab\">

  <li role=\"presentation\"><a href=\"#news\" aria-controls=\"news\" role=\"tab\" data-toggle=\"tab\">News</a></li>
  <li role=\"presentation\"><a href=\"#important-news\" aria-controls=\"important-news\" role=\"tab\" data-toggle=\"tab\">Important News</a></li>

</ul>

<div class=\"tab-content\">

  <section role=\"tabpanel\" class=\"tab-pane active\" id=\"news\">

  \t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities_news"]) ? $context["entities_news"] : $this->getContext($context, "entities_news")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity_news"]) {
            // line 25
            echo "
  \t\t<article class=\"col-xs-12 col-sm-12 article\">
  \t\t\t<div class=\"date\">
  \t\t\t\t<span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>
  \t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity_news"], "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
  \t\t\t</div>
  \t\t\t<h1 class=\"title\"><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("more_show", array("id" => $this->getAttribute($context["entity_news"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity_news"], "title", array()), "html", null, true);
            echo "</a></h1>
  \t\t</article>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity_news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
  </section>
  
  <section role=\"tabpanel\" class=\"tab-pane\" id=\"important-news\">

  \t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities_important"]) ? $context["entities_important"] : $this->getContext($context, "entities_important")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity_important"]) {
            // line 41
            echo "
  \t\t<article class=\"col-xs-12 col-sm-12 article\">
  \t\t\t<div class=\"date\">
  \t\t\t\t<span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>
  \t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity_important"], "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
  \t\t\t</div>
  \t\t\t<h1 class=\"title\"><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("more_show", array("id" => $this->getAttribute($context["entity_important"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity_important"], "title", array()), "html", null, true);
            echo "</a></h1>
  \t\t</article>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity_important'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
  </section>

</div>

";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "
<script>

  \$(function () {
    \$('#myTab a:last').tab('show')
  })

</script>

";
    }

    public function getTemplateName()
    {
        return "MyFrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 60,  131 => 59,  122 => 51,  110 => 47,  105 => 45,  99 => 41,  95 => 40,  88 => 35,  76 => 31,  71 => 29,  65 => 25,  61 => 24,  48 => 13,  45 => 11,  40 => 8,  37 => 7,  31 => 5,);
    }
}
