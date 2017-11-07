<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0444a4576419cef143920045711c112e304eb0461eb0f429dfc1acb4d56522ec extends Twig_Template
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
        $__internal_395a3e33bf7e986bb38c87be55c28f7387b5a74a41913404d1464d441f3e73f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395a3e33bf7e986bb38c87be55c28f7387b5a74a41913404d1464d441f3e73f8->enter($__internal_395a3e33bf7e986bb38c87be55c28f7387b5a74a41913404d1464d441f3e73f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_224ca07430e8b67613e633e9c34462bc2825bf8888ebfa2cee8d156dcb6d38f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224ca07430e8b67613e633e9c34462bc2825bf8888ebfa2cee8d156dcb6d38f6->enter($__internal_224ca07430e8b67613e633e9c34462bc2825bf8888ebfa2cee8d156dcb6d38f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_395a3e33bf7e986bb38c87be55c28f7387b5a74a41913404d1464d441f3e73f8->leave($__internal_395a3e33bf7e986bb38c87be55c28f7387b5a74a41913404d1464d441f3e73f8_prof);

        
        $__internal_224ca07430e8b67613e633e9c34462bc2825bf8888ebfa2cee8d156dcb6d38f6->leave($__internal_224ca07430e8b67613e633e9c34462bc2825bf8888ebfa2cee8d156dcb6d38f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
