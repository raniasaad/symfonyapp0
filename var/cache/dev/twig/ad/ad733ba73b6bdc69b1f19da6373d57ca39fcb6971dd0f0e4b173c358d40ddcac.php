<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b9dc98a3bda9ef98121bf0d94aa51adcfd170c868e0d08a9d33bae0824d9d63c extends Twig_Template
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
        $__internal_cd500974e85de4a4df118738b4715c112e943db3c28e5e6b21ee394acc4a488d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd500974e85de4a4df118738b4715c112e943db3c28e5e6b21ee394acc4a488d->enter($__internal_cd500974e85de4a4df118738b4715c112e943db3c28e5e6b21ee394acc4a488d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a20baf80b9a7a95b9dfc93f49391acffd028b9c58898b5f121e91740cbd1eeee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20baf80b9a7a95b9dfc93f49391acffd028b9c58898b5f121e91740cbd1eeee->enter($__internal_a20baf80b9a7a95b9dfc93f49391acffd028b9c58898b5f121e91740cbd1eeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cd500974e85de4a4df118738b4715c112e943db3c28e5e6b21ee394acc4a488d->leave($__internal_cd500974e85de4a4df118738b4715c112e943db3c28e5e6b21ee394acc4a488d_prof);

        
        $__internal_a20baf80b9a7a95b9dfc93f49391acffd028b9c58898b5f121e91740cbd1eeee->leave($__internal_a20baf80b9a7a95b9dfc93f49391acffd028b9c58898b5f121e91740cbd1eeee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
