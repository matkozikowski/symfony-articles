<?php

/* MyBackendBundle:Articles:ajax.html.twig */
class __TwigTemplate_b117d0f6b02c09329b052903cdcf570d8aa6a31b806ac66d30d0ebe27eb04f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <div class=\"col-xs-6 sort-row\">
    <p><strong>Category:</strong> News</p>
    <ul data-category=\"1\" id=\"sortable1\" class=\"connectedSortable\">
        
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities_news"]) ? $context["entities_news"] : $this->getContext($context, "entities_news")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity_news"]) {
            // line 6
            echo "
        <li data-id=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity_news"], "id", array()), "html", null, true);
            echo "\" class=\"ui-state-default\">
            <p>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity_news"], "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
            <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity_news"], "title", array()), "html", null, true);
            echo "</p>
            <p>
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($context["entity_news"], "id", array()))), "html", null, true);
            echo "\">show</a>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute($context["entity_news"], "id", array()))), "html", null, true);
            echo "\">edit</a>
            </p>
        </li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity_news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    </ul>
    </div>
    <div class=\"col-xs-6 sort-row\">
    <p><strong>Category:</strong> Important News</p>
    <ul data-category=\"2\" id=\"sortable2\" class=\"connectedSortable\">

        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities_important"]) ? $context["entities_important"] : $this->getContext($context, "entities_important")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity_important"]) {
            // line 25
            echo "
        <li data-id=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity_important"], "id", array()), "html", null, true);
            echo "\" class=\"ui-state-highlight\">
            <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity_important"], "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
            <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity_important"], "title", array()), "html", null, true);
            echo "</p>
            <p>
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($context["entity_important"], "id", array()))), "html", null, true);
            echo "\">show</a>
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute($context["entity_important"], "id", array()))), "html", null, true);
            echo "\">edit</a>
            </p>
        </li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity_important'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    </ul>
    </div>
";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "<script>
    \$(function() {
    \t\$( \"#sortable1, #sortable2\" ).sortable({
            connectWith: \".connectedSortable\"
        }).disableSelection();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "MyBackendBundle:Articles:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  110 => 39,  105 => 36,  94 => 31,  90 => 30,  85 => 28,  81 => 27,  77 => 26,  74 => 25,  70 => 24,  61 => 17,  50 => 12,  46 => 11,  41 => 9,  37 => 8,  33 => 7,  30 => 6,  26 => 5,  20 => 1,);
    }
}
