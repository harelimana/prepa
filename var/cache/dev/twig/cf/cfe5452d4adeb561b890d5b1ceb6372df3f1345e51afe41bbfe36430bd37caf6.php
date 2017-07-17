<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7744d8dbb2992ab9386e6a736b23c59e136131718c5c9722fce631f0b497a0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d31a2d2a6110aa4fd4ee9d6ebd2d4456215bef0b044008076477192443fab2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31a2d2a6110aa4fd4ee9d6ebd2d4456215bef0b044008076477192443fab2fb->enter($__internal_d31a2d2a6110aa4fd4ee9d6ebd2d4456215bef0b044008076477192443fab2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_411f7387033e2f7da4273845c780eceaf03600f65cbea6d6ee3607840de6ecfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411f7387033e2f7da4273845c780eceaf03600f65cbea6d6ee3607840de6ecfa->enter($__internal_411f7387033e2f7da4273845c780eceaf03600f65cbea6d6ee3607840de6ecfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d31a2d2a6110aa4fd4ee9d6ebd2d4456215bef0b044008076477192443fab2fb->leave($__internal_d31a2d2a6110aa4fd4ee9d6ebd2d4456215bef0b044008076477192443fab2fb_prof);

        
        $__internal_411f7387033e2f7da4273845c780eceaf03600f65cbea6d6ee3607840de6ecfa->leave($__internal_411f7387033e2f7da4273845c780eceaf03600f65cbea6d6ee3607840de6ecfa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7425da0d6752100a5535fa0e33aff92d9308cf04687cd8f9a8d692d4bae994d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7425da0d6752100a5535fa0e33aff92d9308cf04687cd8f9a8d692d4bae994d->enter($__internal_a7425da0d6752100a5535fa0e33aff92d9308cf04687cd8f9a8d692d4bae994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d1bfeb8f1f9461a2a9626e9078f970833ea52abf2fd756d1eaff5b32ee9ba09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1bfeb8f1f9461a2a9626e9078f970833ea52abf2fd756d1eaff5b32ee9ba09->enter($__internal_8d1bfeb8f1f9461a2a9626e9078f970833ea52abf2fd756d1eaff5b32ee9ba09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8d1bfeb8f1f9461a2a9626e9078f970833ea52abf2fd756d1eaff5b32ee9ba09->leave($__internal_8d1bfeb8f1f9461a2a9626e9078f970833ea52abf2fd756d1eaff5b32ee9ba09_prof);

        
        $__internal_a7425da0d6752100a5535fa0e33aff92d9308cf04687cd8f9a8d692d4bae994d->leave($__internal_a7425da0d6752100a5535fa0e33aff92d9308cf04687cd8f9a8d692d4bae994d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee7f358429ddea4bac42079371ef36fb4a189043c2c50f47a3902d93ecf55719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee7f358429ddea4bac42079371ef36fb4a189043c2c50f47a3902d93ecf55719->enter($__internal_ee7f358429ddea4bac42079371ef36fb4a189043c2c50f47a3902d93ecf55719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7bde6678fc3a6059a1656fd723afea31436d51aa5d82d2014b06218ffbf7e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bde6678fc3a6059a1656fd723afea31436d51aa5d82d2014b06218ffbf7e70->enter($__internal_e7bde6678fc3a6059a1656fd723afea31436d51aa5d82d2014b06218ffbf7e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e7bde6678fc3a6059a1656fd723afea31436d51aa5d82d2014b06218ffbf7e70->leave($__internal_e7bde6678fc3a6059a1656fd723afea31436d51aa5d82d2014b06218ffbf7e70_prof);

        
        $__internal_ee7f358429ddea4bac42079371ef36fb4a189043c2c50f47a3902d93ecf55719->leave($__internal_ee7f358429ddea4bac42079371ef36fb4a189043c2c50f47a3902d93ecf55719_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53bba98c81d5707b64f808bb6bb176d5199b81cafa64727bac46cf829e33f98d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bba98c81d5707b64f808bb6bb176d5199b81cafa64727bac46cf829e33f98d->enter($__internal_53bba98c81d5707b64f808bb6bb176d5199b81cafa64727bac46cf829e33f98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2609650d30f4f4a3db2ac394b5d6ae9d9bc14d576353fc54792b482a9b3f3234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2609650d30f4f4a3db2ac394b5d6ae9d9bc14d576353fc54792b482a9b3f3234->enter($__internal_2609650d30f4f4a3db2ac394b5d6ae9d9bc14d576353fc54792b482a9b3f3234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2609650d30f4f4a3db2ac394b5d6ae9d9bc14d576353fc54792b482a9b3f3234->leave($__internal_2609650d30f4f4a3db2ac394b5d6ae9d9bc14d576353fc54792b482a9b3f3234_prof);

        
        $__internal_53bba98c81d5707b64f808bb6bb176d5199b81cafa64727bac46cf829e33f98d->leave($__internal_53bba98c81d5707b64f808bb6bb176d5199b81cafa64727bac46cf829e33f98d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/prepa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
