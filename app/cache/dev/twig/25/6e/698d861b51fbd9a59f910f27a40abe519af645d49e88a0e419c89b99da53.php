<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_256e698d861b51fbd9a59f910f27a40abe519af645d49e88a0e419c89b99da53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "<div class=\"page-header\">
<h1> Admin Panel </h1>
</div>
<div class=\"hero-unit\">
\t\t<div class=\"login-panel\">
\t\t\t<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t\t<p>
\t\t\t    <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User Name", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t    <div class=\"input-prepend\">
\t\t\t    \t<span class=\"add-on\"><i class=\"icon-user\"></i></span>
\t\t\t    \t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t\t\t    </div>
\t\t\t</p>
\t\t\t<p>
\t\t\t    <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t    <div class=\"input-prepend\">
\t\t\t    \t<span class=\"add-on\"><i class=\"icon-folder-close\"></i></span>
\t\t\t    \t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t    </div>
\t\t\t</p>
\t\t\t<p>
\t\t\t    <input style=\"remember-me\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t    <label for=\"remember_me\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("remember password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t</p>
\t\t\t<p>
\t\t\t    <input class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t</p>
\t\t\t</form>
\t\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  82 => 31,  71 => 23,  64 => 19,  58 => 16,  53 => 14,  49 => 13,  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
