<?php

/* super.html.twig */
class __TwigTemplate_64046e9363baa5de740963373cccb78f06d7b4611e5b406dd31588e1d328ffcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d05f90dcb0dcbcc59e672e895c071c94c98d6baff5cc152c0481ab2a5b468b8 = $this->env->getExtension("native_profiler");
        $__internal_5d05f90dcb0dcbcc59e672e895c071c94c98d6baff5cc152c0481ab2a5b468b8->enter($__internal_5d05f90dcb0dcbcc59e672e895c071c94c98d6baff5cc152c0481ab2a5b468b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "super.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_5d05f90dcb0dcbcc59e672e895c071c94c98d6baff5cc152c0481ab2a5b468b8->leave($__internal_5d05f90dcb0dcbcc59e672e895c071c94c98d6baff5cc152c0481ab2a5b468b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02eea0473eda73752f17861753b0b63658bb42d67431f0c84760bd827a235338 = $this->env->getExtension("native_profiler");
        $__internal_02eea0473eda73752f17861753b0b63658bb42d67431f0c84760bd827a235338->enter($__internal_02eea0473eda73752f17861753b0b63658bb42d67431f0c84760bd827a235338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_02eea0473eda73752f17861753b0b63658bb42d67431f0c84760bd827a235338->leave($__internal_02eea0473eda73752f17861753b0b63658bb42d67431f0c84760bd827a235338_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a8cd4adf794a4f9bdfcd9ccc96f2dd808d953955974981963952b54e276fcce = $this->env->getExtension("native_profiler");
        $__internal_5a8cd4adf794a4f9bdfcd9ccc96f2dd808d953955974981963952b54e276fcce->enter($__internal_5a8cd4adf794a4f9bdfcd9ccc96f2dd808d953955974981963952b54e276fcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a8cd4adf794a4f9bdfcd9ccc96f2dd808d953955974981963952b54e276fcce->leave($__internal_5a8cd4adf794a4f9bdfcd9ccc96f2dd808d953955974981963952b54e276fcce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a590e96096fd01f9c2f174b62f9fefc5fdb1a1eb6b06ac19c88c7c7b01d343f8 = $this->env->getExtension("native_profiler");
        $__internal_a590e96096fd01f9c2f174b62f9fefc5fdb1a1eb6b06ac19c88c7c7b01d343f8->enter($__internal_a590e96096fd01f9c2f174b62f9fefc5fdb1a1eb6b06ac19c88c7c7b01d343f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a590e96096fd01f9c2f174b62f9fefc5fdb1a1eb6b06ac19c88c7c7b01d343f8->leave($__internal_a590e96096fd01f9c2f174b62f9fefc5fdb1a1eb6b06ac19c88c7c7b01d343f8_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35c9cc4cc5e7ef1508cab18068d514662097d4da3fc3dc85223f4e6c35e814d6 = $this->env->getExtension("native_profiler");
        $__internal_35c9cc4cc5e7ef1508cab18068d514662097d4da3fc3dc85223f4e6c35e814d6->enter($__internal_35c9cc4cc5e7ef1508cab18068d514662097d4da3fc3dc85223f4e6c35e814d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35c9cc4cc5e7ef1508cab18068d514662097d4da3fc3dc85223f4e6c35e814d6->leave($__internal_35c9cc4cc5e7ef1508cab18068d514662097d4da3fc3dc85223f4e6c35e814d6_prof);

    }

    public function getTemplateName()
    {
        return "super.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 12,  93 => 11,  82 => 6,  70 => 5,  59 => 14,  54 => 13,  51 => 12,  49 => 11,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"/>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/*     </body>*/
/* </html>*/
/* */
