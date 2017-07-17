<?php

/* base.html.twig */
class __TwigTemplate_c1dad5e52bc3b3d7db77903e83fb20b440efc2972035215dac92500f75ed5757 extends Twig_Template
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
        $__internal_1c6f98b82e11911b8a1435fcf0a8245feb23e6883104624d783bb90652bcfef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6f98b82e11911b8a1435fcf0a8245feb23e6883104624d783bb90652bcfef1->enter($__internal_1c6f98b82e11911b8a1435fcf0a8245feb23e6883104624d783bb90652bcfef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3307b7d6530ac3e32037f4095515141e1fcfa67ccb3cb48131f0f238baaedd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3307b7d6530ac3e32037f4095515141e1fcfa67ccb3cb48131f0f238baaedd4a->enter($__internal_3307b7d6530ac3e32037f4095515141e1fcfa67ccb3cb48131f0f238baaedd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_1c6f98b82e11911b8a1435fcf0a8245feb23e6883104624d783bb90652bcfef1->leave($__internal_1c6f98b82e11911b8a1435fcf0a8245feb23e6883104624d783bb90652bcfef1_prof);

        
        $__internal_3307b7d6530ac3e32037f4095515141e1fcfa67ccb3cb48131f0f238baaedd4a->leave($__internal_3307b7d6530ac3e32037f4095515141e1fcfa67ccb3cb48131f0f238baaedd4a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f595b080bbe7de0827ea09f934f64ee31f70ff0940871a7165d19dcf10c863bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f595b080bbe7de0827ea09f934f64ee31f70ff0940871a7165d19dcf10c863bd->enter($__internal_f595b080bbe7de0827ea09f934f64ee31f70ff0940871a7165d19dcf10c863bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24a139fc86e7c15655f140c9a8df8a8202b6c2d0ca816cad50032fc9d6ff5121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a139fc86e7c15655f140c9a8df8a8202b6c2d0ca816cad50032fc9d6ff5121->enter($__internal_24a139fc86e7c15655f140c9a8df8a8202b6c2d0ca816cad50032fc9d6ff5121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_24a139fc86e7c15655f140c9a8df8a8202b6c2d0ca816cad50032fc9d6ff5121->leave($__internal_24a139fc86e7c15655f140c9a8df8a8202b6c2d0ca816cad50032fc9d6ff5121_prof);

        
        $__internal_f595b080bbe7de0827ea09f934f64ee31f70ff0940871a7165d19dcf10c863bd->leave($__internal_f595b080bbe7de0827ea09f934f64ee31f70ff0940871a7165d19dcf10c863bd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cddd761e4c597c75129b19eb7d34c4284fe8857436d75b66d28a7906bd5a3a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cddd761e4c597c75129b19eb7d34c4284fe8857436d75b66d28a7906bd5a3a37->enter($__internal_cddd761e4c597c75129b19eb7d34c4284fe8857436d75b66d28a7906bd5a3a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_58bffdaf533b865de0bd2ee5212c8ff487ee053b6289c41768ba8e6233596c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bffdaf533b865de0bd2ee5212c8ff487ee053b6289c41768ba8e6233596c3f->enter($__internal_58bffdaf533b865de0bd2ee5212c8ff487ee053b6289c41768ba8e6233596c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_58bffdaf533b865de0bd2ee5212c8ff487ee053b6289c41768ba8e6233596c3f->leave($__internal_58bffdaf533b865de0bd2ee5212c8ff487ee053b6289c41768ba8e6233596c3f_prof);

        
        $__internal_cddd761e4c597c75129b19eb7d34c4284fe8857436d75b66d28a7906bd5a3a37->leave($__internal_cddd761e4c597c75129b19eb7d34c4284fe8857436d75b66d28a7906bd5a3a37_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_64cf8d14fb9e0f185ae8ee519edd1eb2eef50192dc5b625151985ee4b3aca82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64cf8d14fb9e0f185ae8ee519edd1eb2eef50192dc5b625151985ee4b3aca82f->enter($__internal_64cf8d14fb9e0f185ae8ee519edd1eb2eef50192dc5b625151985ee4b3aca82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e641bc4de7d4de76583eb77f078549b5a33bc6f8a140bb82001e3985f2ff3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e641bc4de7d4de76583eb77f078549b5a33bc6f8a140bb82001e3985f2ff3e7->enter($__internal_8e641bc4de7d4de76583eb77f078549b5a33bc6f8a140bb82001e3985f2ff3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e641bc4de7d4de76583eb77f078549b5a33bc6f8a140bb82001e3985f2ff3e7->leave($__internal_8e641bc4de7d4de76583eb77f078549b5a33bc6f8a140bb82001e3985f2ff3e7_prof);

        
        $__internal_64cf8d14fb9e0f185ae8ee519edd1eb2eef50192dc5b625151985ee4b3aca82f->leave($__internal_64cf8d14fb9e0f185ae8ee519edd1eb2eef50192dc5b625151985ee4b3aca82f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed65cbda51ea60d8372dd34ca826b6c1e0c9595ac8763b359802e321c92eae8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed65cbda51ea60d8372dd34ca826b6c1e0c9595ac8763b359802e321c92eae8e->enter($__internal_ed65cbda51ea60d8372dd34ca826b6c1e0c9595ac8763b359802e321c92eae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_282a19ddeaabbf2c96c8a547e4d2cbc14aae84be15c20a931ac87fbb9951880a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282a19ddeaabbf2c96c8a547e4d2cbc14aae84be15c20a931ac87fbb9951880a->enter($__internal_282a19ddeaabbf2c96c8a547e4d2cbc14aae84be15c20a931ac87fbb9951880a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_282a19ddeaabbf2c96c8a547e4d2cbc14aae84be15c20a931ac87fbb9951880a->leave($__internal_282a19ddeaabbf2c96c8a547e4d2cbc14aae84be15c20a931ac87fbb9951880a_prof);

        
        $__internal_ed65cbda51ea60d8372dd34ca826b6c1e0c9595ac8763b359802e321c92eae8e->leave($__internal_ed65cbda51ea60d8372dd34ca826b6c1e0c9595ac8763b359802e321c92eae8e_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/prepa/app/Resources/views/base.html.twig");
    }
}
