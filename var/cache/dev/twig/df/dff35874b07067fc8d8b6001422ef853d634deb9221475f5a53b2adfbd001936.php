<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_42ad1cda4129fb7dd270a17c73e9d777ce83a5593fdd83dab77160909243549d extends Twig_Template
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
        $__internal_2a4b1be6035af5ce7d403b19714194b34b737f6ef7ba9b31239a7bb1cf86c0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4b1be6035af5ce7d403b19714194b34b737f6ef7ba9b31239a7bb1cf86c0ef->enter($__internal_2a4b1be6035af5ce7d403b19714194b34b737f6ef7ba9b31239a7bb1cf86c0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_67ba9ac6f4ad6c8aa508fac8d0e04ab131de905c8c0f6e1c94f342a94108e0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ba9ac6f4ad6c8aa508fac8d0e04ab131de905c8c0f6e1c94f342a94108e0fa->enter($__internal_67ba9ac6f4ad6c8aa508fac8d0e04ab131de905c8c0f6e1c94f342a94108e0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2a4b1be6035af5ce7d403b19714194b34b737f6ef7ba9b31239a7bb1cf86c0ef->leave($__internal_2a4b1be6035af5ce7d403b19714194b34b737f6ef7ba9b31239a7bb1cf86c0ef_prof);

        
        $__internal_67ba9ac6f4ad6c8aa508fac8d0e04ab131de905c8c0f6e1c94f342a94108e0fa->leave($__internal_67ba9ac6f4ad6c8aa508fac8d0e04ab131de905c8c0f6e1c94f342a94108e0fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_36db8fc20a2639106eb1e5866e1e91c6f16198d36afdfea27de4a6ac9729a203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36db8fc20a2639106eb1e5866e1e91c6f16198d36afdfea27de4a6ac9729a203->enter($__internal_36db8fc20a2639106eb1e5866e1e91c6f16198d36afdfea27de4a6ac9729a203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0519dbcba211047f174c30bf8e98a0e3302c8532004279620308ee65055ba541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0519dbcba211047f174c30bf8e98a0e3302c8532004279620308ee65055ba541->enter($__internal_0519dbcba211047f174c30bf8e98a0e3302c8532004279620308ee65055ba541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0519dbcba211047f174c30bf8e98a0e3302c8532004279620308ee65055ba541->leave($__internal_0519dbcba211047f174c30bf8e98a0e3302c8532004279620308ee65055ba541_prof);

        
        $__internal_36db8fc20a2639106eb1e5866e1e91c6f16198d36afdfea27de4a6ac9729a203->leave($__internal_36db8fc20a2639106eb1e5866e1e91c6f16198d36afdfea27de4a6ac9729a203_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ba23d5d51d719b44a0fe281637e0341800effafe29e65b00b5d49e5dea8cd97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba23d5d51d719b44a0fe281637e0341800effafe29e65b00b5d49e5dea8cd97->enter($__internal_2ba23d5d51d719b44a0fe281637e0341800effafe29e65b00b5d49e5dea8cd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8030d2c267d5b6477c5a48ac34a7eee6db3f9421182c410f8b0ef83a266e8514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8030d2c267d5b6477c5a48ac34a7eee6db3f9421182c410f8b0ef83a266e8514->enter($__internal_8030d2c267d5b6477c5a48ac34a7eee6db3f9421182c410f8b0ef83a266e8514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8030d2c267d5b6477c5a48ac34a7eee6db3f9421182c410f8b0ef83a266e8514->leave($__internal_8030d2c267d5b6477c5a48ac34a7eee6db3f9421182c410f8b0ef83a266e8514_prof);

        
        $__internal_2ba23d5d51d719b44a0fe281637e0341800effafe29e65b00b5d49e5dea8cd97->leave($__internal_2ba23d5d51d719b44a0fe281637e0341800effafe29e65b00b5d49e5dea8cd97_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec3fb47e7defe2ed5d0e146fdb918a5cb309b6be27375c329b29c591f7c060c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3fb47e7defe2ed5d0e146fdb918a5cb309b6be27375c329b29c591f7c060c0->enter($__internal_ec3fb47e7defe2ed5d0e146fdb918a5cb309b6be27375c329b29c591f7c060c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dfaffe5d00772e07d7eea402931bed6a44301f5f563ee077dadf0f5708bd287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfaffe5d00772e07d7eea402931bed6a44301f5f563ee077dadf0f5708bd287->enter($__internal_4dfaffe5d00772e07d7eea402931bed6a44301f5f563ee077dadf0f5708bd287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4dfaffe5d00772e07d7eea402931bed6a44301f5f563ee077dadf0f5708bd287->leave($__internal_4dfaffe5d00772e07d7eea402931bed6a44301f5f563ee077dadf0f5708bd287_prof);

        
        $__internal_ec3fb47e7defe2ed5d0e146fdb918a5cb309b6be27375c329b29c591f7c060c0->leave($__internal_ec3fb47e7defe2ed5d0e146fdb918a5cb309b6be27375c329b29c591f7c060c0_prof);

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
