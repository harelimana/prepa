<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5a8aad0960db982a4b272ec14ce37f56097cfbd64e8de10cd710a4af9b9abe9 extends Twig_Template
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
        $__internal_11baed198af73a0a68ce92b4246428eace053511c15c2005b7c584cb9d753541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11baed198af73a0a68ce92b4246428eace053511c15c2005b7c584cb9d753541->enter($__internal_11baed198af73a0a68ce92b4246428eace053511c15c2005b7c584cb9d753541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b6be26786eb168e6674eeb9e51b9175126e8f270c525be96ee4d11339e0268bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6be26786eb168e6674eeb9e51b9175126e8f270c525be96ee4d11339e0268bb->enter($__internal_b6be26786eb168e6674eeb9e51b9175126e8f270c525be96ee4d11339e0268bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11baed198af73a0a68ce92b4246428eace053511c15c2005b7c584cb9d753541->leave($__internal_11baed198af73a0a68ce92b4246428eace053511c15c2005b7c584cb9d753541_prof);

        
        $__internal_b6be26786eb168e6674eeb9e51b9175126e8f270c525be96ee4d11339e0268bb->leave($__internal_b6be26786eb168e6674eeb9e51b9175126e8f270c525be96ee4d11339e0268bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f48700c5bea969d509192bec1ba4fa60f296f227fd92526af1e428e0967f6b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48700c5bea969d509192bec1ba4fa60f296f227fd92526af1e428e0967f6b3c->enter($__internal_f48700c5bea969d509192bec1ba4fa60f296f227fd92526af1e428e0967f6b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7b999c9d1fac253ba993c8c2dfe70a4be4742bc7782e525d82561d75d7da917c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b999c9d1fac253ba993c8c2dfe70a4be4742bc7782e525d82561d75d7da917c->enter($__internal_7b999c9d1fac253ba993c8c2dfe70a4be4742bc7782e525d82561d75d7da917c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7b999c9d1fac253ba993c8c2dfe70a4be4742bc7782e525d82561d75d7da917c->leave($__internal_7b999c9d1fac253ba993c8c2dfe70a4be4742bc7782e525d82561d75d7da917c_prof);

        
        $__internal_f48700c5bea969d509192bec1ba4fa60f296f227fd92526af1e428e0967f6b3c->leave($__internal_f48700c5bea969d509192bec1ba4fa60f296f227fd92526af1e428e0967f6b3c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8eaec82a57ec174f378bde1abed4365aa09f84bea3f0c88a3e0a44ce1848295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8eaec82a57ec174f378bde1abed4365aa09f84bea3f0c88a3e0a44ce1848295->enter($__internal_d8eaec82a57ec174f378bde1abed4365aa09f84bea3f0c88a3e0a44ce1848295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c3b9981317973d697b6e3a451cd3618dbeb95629a818715c9597720bca86c550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b9981317973d697b6e3a451cd3618dbeb95629a818715c9597720bca86c550->enter($__internal_c3b9981317973d697b6e3a451cd3618dbeb95629a818715c9597720bca86c550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c3b9981317973d697b6e3a451cd3618dbeb95629a818715c9597720bca86c550->leave($__internal_c3b9981317973d697b6e3a451cd3618dbeb95629a818715c9597720bca86c550_prof);

        
        $__internal_d8eaec82a57ec174f378bde1abed4365aa09f84bea3f0c88a3e0a44ce1848295->leave($__internal_d8eaec82a57ec174f378bde1abed4365aa09f84bea3f0c88a3e0a44ce1848295_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf61456f640eacbc5af072f46f9d1ea329ed6141df40de7b3d13f8ad5e9ab34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf61456f640eacbc5af072f46f9d1ea329ed6141df40de7b3d13f8ad5e9ab34f->enter($__internal_bf61456f640eacbc5af072f46f9d1ea329ed6141df40de7b3d13f8ad5e9ab34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b2c640b050aae230e846f34b4255b18468554ba0c32f1a4193874804bd27d1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c640b050aae230e846f34b4255b18468554ba0c32f1a4193874804bd27d1cf->enter($__internal_b2c640b050aae230e846f34b4255b18468554ba0c32f1a4193874804bd27d1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b2c640b050aae230e846f34b4255b18468554ba0c32f1a4193874804bd27d1cf->leave($__internal_b2c640b050aae230e846f34b4255b18468554ba0c32f1a4193874804bd27d1cf_prof);

        
        $__internal_bf61456f640eacbc5af072f46f9d1ea329ed6141df40de7b3d13f8ad5e9ab34f->leave($__internal_bf61456f640eacbc5af072f46f9d1ea329ed6141df40de7b3d13f8ad5e9ab34f_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/prepa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
