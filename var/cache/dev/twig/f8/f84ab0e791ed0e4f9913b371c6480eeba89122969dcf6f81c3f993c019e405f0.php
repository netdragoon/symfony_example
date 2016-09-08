<?php

/* todo/index.html.twig */
class __TwigTemplate_c9be52306639f8a9d86d308a2c6855667c5570cfdca50ed1e899d937d391c0df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.html.twig", "todo/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "super.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbb69568d90d99e4cb14d6c4a1b6c1f1f4ccbf624c72f355c6d215ba6ce7d4f0 = $this->env->getExtension("native_profiler");
        $__internal_cbb69568d90d99e4cb14d6c4a1b6c1f1f4ccbf624c72f355c6d215ba6ce7d4f0->enter($__internal_cbb69568d90d99e4cb14d6c4a1b6c1f1f4ccbf624c72f355c6d215ba6ce7d4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbb69568d90d99e4cb14d6c4a1b6c1f1f4ccbf624c72f355c6d215ba6ce7d4f0->leave($__internal_cbb69568d90d99e4cb14d6c4a1b6c1f1f4ccbf624c72f355c6d215ba6ce7d4f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d45d5b6fe5244dc0d236561c6e9e9ff9235de857b932fcb734045fba59b1d62a = $this->env->getExtension("native_profiler");
        $__internal_d45d5b6fe5244dc0d236561c6e9e9ff9235de857b932fcb734045fba59b1d62a->enter($__internal_d45d5b6fe5244dc0d236561c6e9e9ff9235de857b932fcb734045fba59b1d62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Todo Index</h1>
    <table class=\"table table-responsive\">
        <tr>
            <th>Id</th>
            <th>Descrição</th>
        </tr>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "        <tr>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </table>

    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d45d5b6fe5244dc0d236561c6e9e9ff9235de857b932fcb734045fba59b1d62a->leave($__internal_d45d5b6fe5244dc0d236561c6e9e9ff9235de857b932fcb734045fba59b1d62a_prof);

    }

    public function getTemplateName()
    {
        return "todo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  76 => 19,  72 => 18,  68 => 16,  59 => 13,  55 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'super.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Todo Index</h1>*/
/*     <table class="table table-responsive">*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <th>Descrição</th>*/
/*         </tr>*/
/*         {% for item in list %}*/
/*         <tr>*/
/*             <td>{{ item.id }}</td>*/
/*             <td>{{ item.description }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
