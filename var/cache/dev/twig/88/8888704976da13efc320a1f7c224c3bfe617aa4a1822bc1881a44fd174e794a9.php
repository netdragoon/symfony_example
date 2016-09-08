<?php

/* base.html.twig */
class __TwigTemplate_1a59379475825ee5e6512a83c83409fc75d3443b2f4d2a816b1c0655534bf55e extends Twig_Template
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
        $__internal_a4aad7d98fa0bb89f8ead713d973b840f42aef71a8d0b1d61d519217fe5e5b81 = $this->env->getExtension("native_profiler");
        $__internal_a4aad7d98fa0bb89f8ead713d973b840f42aef71a8d0b1d61d519217fe5e5b81->enter($__internal_a4aad7d98fa0bb89f8ead713d973b840f42aef71a8d0b1d61d519217fe5e5b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a4aad7d98fa0bb89f8ead713d973b840f42aef71a8d0b1d61d519217fe5e5b81->leave($__internal_a4aad7d98fa0bb89f8ead713d973b840f42aef71a8d0b1d61d519217fe5e5b81_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cefe46dd7fd5a4c2030aa345d86c1208f288577c913c8974aa4d66d4310d784 = $this->env->getExtension("native_profiler");
        $__internal_7cefe46dd7fd5a4c2030aa345d86c1208f288577c913c8974aa4d66d4310d784->enter($__internal_7cefe46dd7fd5a4c2030aa345d86c1208f288577c913c8974aa4d66d4310d784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7cefe46dd7fd5a4c2030aa345d86c1208f288577c913c8974aa4d66d4310d784->leave($__internal_7cefe46dd7fd5a4c2030aa345d86c1208f288577c913c8974aa4d66d4310d784_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_196fa6270a964832d38e30852670d66184c7c32f7bbdea4866658ba9bffbd68b = $this->env->getExtension("native_profiler");
        $__internal_196fa6270a964832d38e30852670d66184c7c32f7bbdea4866658ba9bffbd68b->enter($__internal_196fa6270a964832d38e30852670d66184c7c32f7bbdea4866658ba9bffbd68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_196fa6270a964832d38e30852670d66184c7c32f7bbdea4866658ba9bffbd68b->leave($__internal_196fa6270a964832d38e30852670d66184c7c32f7bbdea4866658ba9bffbd68b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_53423dc5f9f3e99a96cf333079213251664308659cc3fcb4d3686a88a530afd4 = $this->env->getExtension("native_profiler");
        $__internal_53423dc5f9f3e99a96cf333079213251664308659cc3fcb4d3686a88a530afd4->enter($__internal_53423dc5f9f3e99a96cf333079213251664308659cc3fcb4d3686a88a530afd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53423dc5f9f3e99a96cf333079213251664308659cc3fcb4d3686a88a530afd4->leave($__internal_53423dc5f9f3e99a96cf333079213251664308659cc3fcb4d3686a88a530afd4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_858f8123547e78b2c8dfcb6f3fa49fea10302e163027ffe17393bc443977fc4f = $this->env->getExtension("native_profiler");
        $__internal_858f8123547e78b2c8dfcb6f3fa49fea10302e163027ffe17393bc443977fc4f->enter($__internal_858f8123547e78b2c8dfcb6f3fa49fea10302e163027ffe17393bc443977fc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_858f8123547e78b2c8dfcb6f3fa49fea10302e163027ffe17393bc443977fc4f->leave($__internal_858f8123547e78b2c8dfcb6f3fa49fea10302e163027ffe17393bc443977fc4f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
