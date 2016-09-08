<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_067a9997b441a71d179fd1e7461e44c670064cd56b8fd73f82e21a8c8efe8538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fccf6d949cdaca51b75cac0098d3f93f349a8169fa0fdaf893d121a9ccc4dc06 = $this->env->getExtension("native_profiler");
        $__internal_fccf6d949cdaca51b75cac0098d3f93f349a8169fa0fdaf893d121a9ccc4dc06->enter($__internal_fccf6d949cdaca51b75cac0098d3f93f349a8169fa0fdaf893d121a9ccc4dc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fccf6d949cdaca51b75cac0098d3f93f349a8169fa0fdaf893d121a9ccc4dc06->leave($__internal_fccf6d949cdaca51b75cac0098d3f93f349a8169fa0fdaf893d121a9ccc4dc06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0859215b830f89efac5974ab209aa38b99a403f59c610acd481f8c2022027f4 = $this->env->getExtension("native_profiler");
        $__internal_d0859215b830f89efac5974ab209aa38b99a403f59c610acd481f8c2022027f4->enter($__internal_d0859215b830f89efac5974ab209aa38b99a403f59c610acd481f8c2022027f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d0859215b830f89efac5974ab209aa38b99a403f59c610acd481f8c2022027f4->leave($__internal_d0859215b830f89efac5974ab209aa38b99a403f59c610acd481f8c2022027f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_feb165268aedd10f9a435611ddb629a6adb74650ce73baa0c9857f806c58b238 = $this->env->getExtension("native_profiler");
        $__internal_feb165268aedd10f9a435611ddb629a6adb74650ce73baa0c9857f806c58b238->enter($__internal_feb165268aedd10f9a435611ddb629a6adb74650ce73baa0c9857f806c58b238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_feb165268aedd10f9a435611ddb629a6adb74650ce73baa0c9857f806c58b238->leave($__internal_feb165268aedd10f9a435611ddb629a6adb74650ce73baa0c9857f806c58b238_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dd3c6e7f1766a33705ee509d1d66b2d32067689490562afc0edf74df6c065b7 = $this->env->getExtension("native_profiler");
        $__internal_7dd3c6e7f1766a33705ee509d1d66b2d32067689490562afc0edf74df6c065b7->enter($__internal_7dd3c6e7f1766a33705ee509d1d66b2d32067689490562afc0edf74df6c065b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7dd3c6e7f1766a33705ee509d1d66b2d32067689490562afc0edf74df6c065b7->leave($__internal_7dd3c6e7f1766a33705ee509d1d66b2d32067689490562afc0edf74df6c065b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
