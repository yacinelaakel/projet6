<?php

/* base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
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
        $__internal_1ae53dba7a7d7581ac784cdaac3941712686fdd850e3122f3f5f8d80def9f3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae53dba7a7d7581ac784cdaac3941712686fdd850e3122f3f5f8d80def9f3c9->enter($__internal_1ae53dba7a7d7581ac784cdaac3941712686fdd850e3122f3f5f8d80def9f3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_29e15309fffefac9a718c7e12811edb849c6a28c8d184163b6ab23a860d70e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e15309fffefac9a718c7e12811edb849c6a28c8d184163b6ab23a860d70e4b->enter($__internal_29e15309fffefac9a718c7e12811edb849c6a28c8d184163b6ab23a860d70e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1ae53dba7a7d7581ac784cdaac3941712686fdd850e3122f3f5f8d80def9f3c9->leave($__internal_1ae53dba7a7d7581ac784cdaac3941712686fdd850e3122f3f5f8d80def9f3c9_prof);

        
        $__internal_29e15309fffefac9a718c7e12811edb849c6a28c8d184163b6ab23a860d70e4b->leave($__internal_29e15309fffefac9a718c7e12811edb849c6a28c8d184163b6ab23a860d70e4b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dfe657b78533b14fdb77e5fc2bbcead3b095c0a5c1f891907a545060e55a7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dfe657b78533b14fdb77e5fc2bbcead3b095c0a5c1f891907a545060e55a7c6->enter($__internal_0dfe657b78533b14fdb77e5fc2bbcead3b095c0a5c1f891907a545060e55a7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab95804d01eed4524f0821d1d85999c4f85352204be9636743192a7341919fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab95804d01eed4524f0821d1d85999c4f85352204be9636743192a7341919fb6->enter($__internal_ab95804d01eed4524f0821d1d85999c4f85352204be9636743192a7341919fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ab95804d01eed4524f0821d1d85999c4f85352204be9636743192a7341919fb6->leave($__internal_ab95804d01eed4524f0821d1d85999c4f85352204be9636743192a7341919fb6_prof);

        
        $__internal_0dfe657b78533b14fdb77e5fc2bbcead3b095c0a5c1f891907a545060e55a7c6->leave($__internal_0dfe657b78533b14fdb77e5fc2bbcead3b095c0a5c1f891907a545060e55a7c6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5fd7e5c1432e16298599bafcecb30f2f9ce0bc192cb16014a94d4cd1fb2ac23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5fd7e5c1432e16298599bafcecb30f2f9ce0bc192cb16014a94d4cd1fb2ac23->enter($__internal_d5fd7e5c1432e16298599bafcecb30f2f9ce0bc192cb16014a94d4cd1fb2ac23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_94a05d9a59b18fa5b755f682e37628ae3a453e9ca67b06a3ff5e99189af05562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a05d9a59b18fa5b755f682e37628ae3a453e9ca67b06a3ff5e99189af05562->enter($__internal_94a05d9a59b18fa5b755f682e37628ae3a453e9ca67b06a3ff5e99189af05562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94a05d9a59b18fa5b755f682e37628ae3a453e9ca67b06a3ff5e99189af05562->leave($__internal_94a05d9a59b18fa5b755f682e37628ae3a453e9ca67b06a3ff5e99189af05562_prof);

        
        $__internal_d5fd7e5c1432e16298599bafcecb30f2f9ce0bc192cb16014a94d4cd1fb2ac23->leave($__internal_d5fd7e5c1432e16298599bafcecb30f2f9ce0bc192cb16014a94d4cd1fb2ac23_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0de3141da06e67d8fbfe72c0073139caa8ff02b9c458720b8b58fe0e0f3c7fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de3141da06e67d8fbfe72c0073139caa8ff02b9c458720b8b58fe0e0f3c7fa0->enter($__internal_0de3141da06e67d8fbfe72c0073139caa8ff02b9c458720b8b58fe0e0f3c7fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b091a271db7c1533b1bea5f9182af2e3d8eaedfef3bed43e44d8dc630cd6dc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b091a271db7c1533b1bea5f9182af2e3d8eaedfef3bed43e44d8dc630cd6dc6e->enter($__internal_b091a271db7c1533b1bea5f9182af2e3d8eaedfef3bed43e44d8dc630cd6dc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b091a271db7c1533b1bea5f9182af2e3d8eaedfef3bed43e44d8dc630cd6dc6e->leave($__internal_b091a271db7c1533b1bea5f9182af2e3d8eaedfef3bed43e44d8dc630cd6dc6e_prof);

        
        $__internal_0de3141da06e67d8fbfe72c0073139caa8ff02b9c458720b8b58fe0e0f3c7fa0->leave($__internal_0de3141da06e67d8fbfe72c0073139caa8ff02b9c458720b8b58fe0e0f3c7fa0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e9d141cb15b6940d6b0cb3634b160ea09b97fbafcd507e44e2c36ad8ecffa9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9d141cb15b6940d6b0cb3634b160ea09b97fbafcd507e44e2c36ad8ecffa9b->enter($__internal_5e9d141cb15b6940d6b0cb3634b160ea09b97fbafcd507e44e2c36ad8ecffa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4cc50b529c586862587f20210090a4a8f2e79b4fffcd2e87fcc527d19e9b03bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc50b529c586862587f20210090a4a8f2e79b4fffcd2e87fcc527d19e9b03bd->enter($__internal_4cc50b529c586862587f20210090a4a8f2e79b4fffcd2e87fcc527d19e9b03bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4cc50b529c586862587f20210090a4a8f2e79b4fffcd2e87fcc527d19e9b03bd->leave($__internal_4cc50b529c586862587f20210090a4a8f2e79b4fffcd2e87fcc527d19e9b03bd_prof);

        
        $__internal_5e9d141cb15b6940d6b0cb3634b160ea09b97fbafcd507e44e2c36ad8ecffa9b->leave($__internal_5e9d141cb15b6940d6b0cb3634b160ea09b97fbafcd507e44e2c36ad8ecffa9b_prof);

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
", "base.html.twig", "/Applications/MAMP/htdocs/Projet6/app/Resources/views/base.html.twig");
    }
}
