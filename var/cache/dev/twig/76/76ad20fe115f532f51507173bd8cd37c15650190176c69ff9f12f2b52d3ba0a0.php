<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4ba636259aa58625e42626aded9d5e70dad2845ca36f5c4cdad59c70d048f3f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6aafe3a50b1300f5be8e57abee1eeb95ecd59c2d89a15de8ca6acada4e0892c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aafe3a50b1300f5be8e57abee1eeb95ecd59c2d89a15de8ca6acada4e0892c7->enter($__internal_6aafe3a50b1300f5be8e57abee1eeb95ecd59c2d89a15de8ca6acada4e0892c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b8c3b228a2bd04a689b2d619c847608d088fd892a6ec4bb4772db1a8bc782b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c3b228a2bd04a689b2d619c847608d088fd892a6ec4bb4772db1a8bc782b44->enter($__internal_b8c3b228a2bd04a689b2d619c847608d088fd892a6ec4bb4772db1a8bc782b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6aafe3a50b1300f5be8e57abee1eeb95ecd59c2d89a15de8ca6acada4e0892c7->leave($__internal_6aafe3a50b1300f5be8e57abee1eeb95ecd59c2d89a15de8ca6acada4e0892c7_prof);

        
        $__internal_b8c3b228a2bd04a689b2d619c847608d088fd892a6ec4bb4772db1a8bc782b44->leave($__internal_b8c3b228a2bd04a689b2d619c847608d088fd892a6ec4bb4772db1a8bc782b44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
