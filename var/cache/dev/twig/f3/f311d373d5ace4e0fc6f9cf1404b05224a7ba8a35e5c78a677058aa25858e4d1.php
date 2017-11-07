<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2b615e761bfed31166d09958f6695559bc9e196820eff59d889af7db1bf40ec2 extends Twig_Template
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
        $__internal_c06bcc2234e212832f01a21d854149eca2ee1cb4ed30561ede66d65973bf957e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06bcc2234e212832f01a21d854149eca2ee1cb4ed30561ede66d65973bf957e->enter($__internal_c06bcc2234e212832f01a21d854149eca2ee1cb4ed30561ede66d65973bf957e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d342749c1da7f08cb6b129c1824b3351ba7da4c67b327be4d4b7fdf2aca1f893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d342749c1da7f08cb6b129c1824b3351ba7da4c67b327be4d4b7fdf2aca1f893->enter($__internal_d342749c1da7f08cb6b129c1824b3351ba7da4c67b327be4d4b7fdf2aca1f893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c06bcc2234e212832f01a21d854149eca2ee1cb4ed30561ede66d65973bf957e->leave($__internal_c06bcc2234e212832f01a21d854149eca2ee1cb4ed30561ede66d65973bf957e_prof);

        
        $__internal_d342749c1da7f08cb6b129c1824b3351ba7da4c67b327be4d4b7fdf2aca1f893->leave($__internal_d342749c1da7f08cb6b129c1824b3351ba7da4c67b327be4d4b7fdf2aca1f893_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
