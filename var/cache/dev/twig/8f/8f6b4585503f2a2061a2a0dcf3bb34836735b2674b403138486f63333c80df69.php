<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_21475fdef6aa83fca9e550c1e252d7e5a7078eb171008b39aec804ea4fe46760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_562d3011dd72a063afdf7d23a5e88459612f858a22d1971771ae36512c5398d8 = $this->env->getExtension("native_profiler");
        $__internal_562d3011dd72a063afdf7d23a5e88459612f858a22d1971771ae36512c5398d8->enter($__internal_562d3011dd72a063afdf7d23a5e88459612f858a22d1971771ae36512c5398d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_562d3011dd72a063afdf7d23a5e88459612f858a22d1971771ae36512c5398d8->leave($__internal_562d3011dd72a063afdf7d23a5e88459612f858a22d1971771ae36512c5398d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1af2cc48f9c012db5404962ad46ab732ec04ea7c70181a1e7e70b2bdb5d1cf6c = $this->env->getExtension("native_profiler");
        $__internal_1af2cc48f9c012db5404962ad46ab732ec04ea7c70181a1e7e70b2bdb5d1cf6c->enter($__internal_1af2cc48f9c012db5404962ad46ab732ec04ea7c70181a1e7e70b2bdb5d1cf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1af2cc48f9c012db5404962ad46ab732ec04ea7c70181a1e7e70b2bdb5d1cf6c->leave($__internal_1af2cc48f9c012db5404962ad46ab732ec04ea7c70181a1e7e70b2bdb5d1cf6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_397cf9c347c5a7bfb742096bad19aa79b0b304c408213ec081c793c7dc90473e = $this->env->getExtension("native_profiler");
        $__internal_397cf9c347c5a7bfb742096bad19aa79b0b304c408213ec081c793c7dc90473e->enter($__internal_397cf9c347c5a7bfb742096bad19aa79b0b304c408213ec081c793c7dc90473e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_397cf9c347c5a7bfb742096bad19aa79b0b304c408213ec081c793c7dc90473e->leave($__internal_397cf9c347c5a7bfb742096bad19aa79b0b304c408213ec081c793c7dc90473e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90ace06fa2ff24092175a171605caac754d39f82483faefa6127f5b750ea0494 = $this->env->getExtension("native_profiler");
        $__internal_90ace06fa2ff24092175a171605caac754d39f82483faefa6127f5b750ea0494->enter($__internal_90ace06fa2ff24092175a171605caac754d39f82483faefa6127f5b750ea0494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90ace06fa2ff24092175a171605caac754d39f82483faefa6127f5b750ea0494->leave($__internal_90ace06fa2ff24092175a171605caac754d39f82483faefa6127f5b750ea0494_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
