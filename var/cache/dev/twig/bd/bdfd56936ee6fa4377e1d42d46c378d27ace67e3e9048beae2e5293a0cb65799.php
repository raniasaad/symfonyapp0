<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2dd97f27ac5f89f865cd89a67f3139f287d1870106b58a513127a69dba998323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22905a189c60b747c596a9f337da3bb841cb3abb678530ff8bc675100cb76698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22905a189c60b747c596a9f337da3bb841cb3abb678530ff8bc675100cb76698->enter($__internal_22905a189c60b747c596a9f337da3bb841cb3abb678530ff8bc675100cb76698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_68eaf7fd924890586ca2e4264d5b1cb50f2f5045b151ef62d422e6617c223a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68eaf7fd924890586ca2e4264d5b1cb50f2f5045b151ef62d422e6617c223a5e->enter($__internal_68eaf7fd924890586ca2e4264d5b1cb50f2f5045b151ef62d422e6617c223a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_22905a189c60b747c596a9f337da3bb841cb3abb678530ff8bc675100cb76698->leave($__internal_22905a189c60b747c596a9f337da3bb841cb3abb678530ff8bc675100cb76698_prof);

        
        $__internal_68eaf7fd924890586ca2e4264d5b1cb50f2f5045b151ef62d422e6617c223a5e->leave($__internal_68eaf7fd924890586ca2e4264d5b1cb50f2f5045b151ef62d422e6617c223a5e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65ffef69ed169cd3506725d0875c437c16e9d6d5692d12b1ba88d0a90de66547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ffef69ed169cd3506725d0875c437c16e9d6d5692d12b1ba88d0a90de66547->enter($__internal_65ffef69ed169cd3506725d0875c437c16e9d6d5692d12b1ba88d0a90de66547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d0c9dbcfed098f15fc3247259625486ede7c632f87548b82f35c2b70ac8e3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0c9dbcfed098f15fc3247259625486ede7c632f87548b82f35c2b70ac8e3a9->enter($__internal_3d0c9dbcfed098f15fc3247259625486ede7c632f87548b82f35c2b70ac8e3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3d0c9dbcfed098f15fc3247259625486ede7c632f87548b82f35c2b70ac8e3a9->leave($__internal_3d0c9dbcfed098f15fc3247259625486ede7c632f87548b82f35c2b70ac8e3a9_prof);

        
        $__internal_65ffef69ed169cd3506725d0875c437c16e9d6d5692d12b1ba88d0a90de66547->leave($__internal_65ffef69ed169cd3506725d0875c437c16e9d6d5692d12b1ba88d0a90de66547_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f809c4e7d0ce8236190a1b27e5e7abba0001a32b1a87969df0261bc6a31dca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f809c4e7d0ce8236190a1b27e5e7abba0001a32b1a87969df0261bc6a31dca3->enter($__internal_8f809c4e7d0ce8236190a1b27e5e7abba0001a32b1a87969df0261bc6a31dca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ade466189cb11474d05aecf1ecc5a4b22b5ca72483c60e2fdd9a2ac2e5ac385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ade466189cb11474d05aecf1ecc5a4b22b5ca72483c60e2fdd9a2ac2e5ac385->enter($__internal_5ade466189cb11474d05aecf1ecc5a4b22b5ca72483c60e2fdd9a2ac2e5ac385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5ade466189cb11474d05aecf1ecc5a4b22b5ca72483c60e2fdd9a2ac2e5ac385->leave($__internal_5ade466189cb11474d05aecf1ecc5a4b22b5ca72483c60e2fdd9a2ac2e5ac385_prof);

        
        $__internal_8f809c4e7d0ce8236190a1b27e5e7abba0001a32b1a87969df0261bc6a31dca3->leave($__internal_8f809c4e7d0ce8236190a1b27e5e7abba0001a32b1a87969df0261bc6a31dca3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c815b90ef92990e12426e09ef4510c52da9a047a28d6135853c1237d2f135ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c815b90ef92990e12426e09ef4510c52da9a047a28d6135853c1237d2f135ea7->enter($__internal_c815b90ef92990e12426e09ef4510c52da9a047a28d6135853c1237d2f135ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4450fcd56dbc5ae12beb73ea32cc79ae15d2ab025bdc7ecf6977a748347fee87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4450fcd56dbc5ae12beb73ea32cc79ae15d2ab025bdc7ecf6977a748347fee87->enter($__internal_4450fcd56dbc5ae12beb73ea32cc79ae15d2ab025bdc7ecf6977a748347fee87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4450fcd56dbc5ae12beb73ea32cc79ae15d2ab025bdc7ecf6977a748347fee87->leave($__internal_4450fcd56dbc5ae12beb73ea32cc79ae15d2ab025bdc7ecf6977a748347fee87_prof);

        
        $__internal_c815b90ef92990e12426e09ef4510c52da9a047a28d6135853c1237d2f135ea7->leave($__internal_c815b90ef92990e12426e09ef4510c52da9a047a28d6135853c1237d2f135ea7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
