<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b0b62c2a463974e672c3f444e80020993e9e26580fdc9caf0969eee452a8da4b extends Twig_Template
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
        $__internal_21129b3111d58d73e2c3339a4b3679a62c5f6b88258331b49a2d951c32ce321d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21129b3111d58d73e2c3339a4b3679a62c5f6b88258331b49a2d951c32ce321d->enter($__internal_21129b3111d58d73e2c3339a4b3679a62c5f6b88258331b49a2d951c32ce321d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_cfb839f6395b6f4d474cfc190dfb1f193f24cf64e24347e33b26640cd9eb86ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb839f6395b6f4d474cfc190dfb1f193f24cf64e24347e33b26640cd9eb86ac->enter($__internal_cfb839f6395b6f4d474cfc190dfb1f193f24cf64e24347e33b26640cd9eb86ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_21129b3111d58d73e2c3339a4b3679a62c5f6b88258331b49a2d951c32ce321d->leave($__internal_21129b3111d58d73e2c3339a4b3679a62c5f6b88258331b49a2d951c32ce321d_prof);

        
        $__internal_cfb839f6395b6f4d474cfc190dfb1f193f24cf64e24347e33b26640cd9eb86ac->leave($__internal_cfb839f6395b6f4d474cfc190dfb1f193f24cf64e24347e33b26640cd9eb86ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
