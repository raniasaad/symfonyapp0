<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb70bc6eca82c333dfbd999d063010847510bbd37c5cacd51064d85a161254e0 extends Twig_Template
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
        $__internal_ede0b4213e5b9779fa25515fa790f11f78f2c3ce349f5732e1ac187cc5779511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede0b4213e5b9779fa25515fa790f11f78f2c3ce349f5732e1ac187cc5779511->enter($__internal_ede0b4213e5b9779fa25515fa790f11f78f2c3ce349f5732e1ac187cc5779511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_783580a97f3decfe86809e00a6275c7139fc620cff8729952662d2a7b779de80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783580a97f3decfe86809e00a6275c7139fc620cff8729952662d2a7b779de80->enter($__internal_783580a97f3decfe86809e00a6275c7139fc620cff8729952662d2a7b779de80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ede0b4213e5b9779fa25515fa790f11f78f2c3ce349f5732e1ac187cc5779511->leave($__internal_ede0b4213e5b9779fa25515fa790f11f78f2c3ce349f5732e1ac187cc5779511_prof);

        
        $__internal_783580a97f3decfe86809e00a6275c7139fc620cff8729952662d2a7b779de80->leave($__internal_783580a97f3decfe86809e00a6275c7139fc620cff8729952662d2a7b779de80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
