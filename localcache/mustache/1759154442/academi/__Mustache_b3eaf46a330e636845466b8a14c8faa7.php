<?php

class __Mustache_b3eaf46a330e636845466b8a14c8faa7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav id="header" class="';
        $value = $context->find('themestyleheader');
        if (empty($value)) {
            
            $buffer .= ' moodle-based-header ';
        }
        $buffer .= ' fixed-top navbar navbar-light bg-faded navbar-static-top navbar-expand moodle-has-zindex" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="container-fluid navbar-nav">
';
        $buffer .= $indent . '            ';
        $value = $context->find('themestyleheader');
        if (empty($value)) {
            
            $buffer .= ' ';
            $buffer .= '
';
            $buffer .= $indent . '                <button class="navbar-toggler aabtn d-block d-md-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_boost-drawers-primary">
';
            $buffer .= $indent . '                    <span class="navbar-toggler-icon"></span>
';
            $buffer .= $indent . '                    <span class="sr-only">';
            $value = $context->find('str');
            $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
            $buffer .= '</span>
';
            $buffer .= $indent . '                </button>
';
            $buffer .= $indent . '                <a href="';
            $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '/?redirect=0" class="navbar-brand ';
            $value = $context->find('logourl');
            $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
            $buffer .= '
';
            $value = $context->find('logourl');
            if (empty($value)) {
                
                $buffer .= $indent . '                        hidden-sm-down
';
            }
            $buffer .= $indent . '                        ">
';
            $value = $context->find('showlogo');
            $buffer .= $this->sectionD1d2c6ec4e62f58e9d31c10196537967($context, $indent, $value);
            $value = $context->find('showsitename');
            $buffer .= $this->sectionD0588f753bb0d6f8f735115134b469b7($context, $indent, $value);
            $buffer .= $indent . '                </a>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('themestyleheader');
        $buffer .= $this->sectionBf8212f72dfd723646cd529c9162a808($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            ';
        $value = $context->find('themestyleheader');
        if (empty($value)) {
            
            $buffer .= ' ';
            $buffer .= '
';
            $value = $context->find('primarymoremenu');
            $buffer .= $this->sectionB676f4bb2645e861d8cbee05814e6cfe($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
            $buffer .= $indent . '                    <!-- page_heading_menu -->
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                </ul>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="usernavigation" class="navbar-nav ml-auto">
';
        $value = $context->find('langmenu');
        $buffer .= $this->sectionF079183c2e10d151c34174a0b3a3f44e($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.search_box'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
';
        $value = $context->find('usermenu');
        $buffer .= $this->sectionA9e23d79a85004416d048e2cac960de4($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <!-- search_box -->
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>
';
        if ($partial = $this->mustache->loadPartial('theme_boost/primary-drawer-mobile')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e41d4bdec69372ae67b925ef8ecafab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="logo">
                                <img src="{{logourl}}" alt="{{sitename}}">
                            </span>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <span class="logo">
';
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1d2c6ec4e62f58e9d31c10196537967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{# logourl }}
                            <span class="logo">
                                <img src="{{logourl}}" alt="{{sitename}}">
                            </span>
                        {{/ logourl }}
                        {{^ logourl }}
                            <span class="site-name hidden-sm-down">{{{ sitename }}}</span>
                        {{/ logourl }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('logourl');
                $buffer .= $this->section3e41d4bdec69372ae67b925ef8ecafab($context, $indent, $value);
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <span class="site-name hidden-sm-down">';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0588f753bb0d6f8f735115134b469b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="nav-site-name">{{{sitename}}}</span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="nav-site-name">';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bdf224c96dd3ecee93fc0c4172f05e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'callus, theme_academi';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'callus, theme_academi';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section892ab2757f26bdcb57fe7dc654e2d46f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span><i class="fa fa-phone"></i>{{#str}}callus, theme_academi{{/str}} : {{ phoneno }}</span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span><i class="fa fa-phone"></i>';
                $value = $context->find('str');
                $buffer .= $this->section2bdf224c96dd3ecee93fc0c4172f05e4($context, $indent, $value);
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section996eb735bf1ac13d0059e74f10439783(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'email, theme_academi';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'email, theme_academi';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71c0ee2949b6eccf3e563292b6f84e0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span><i class="fa fa-envelope-o"></i>{{#str}}email, theme_academi{{/str}} : <a href="mailto:{{emailid}}">{{ emailid }}</a></span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span><i class="fa fa-envelope-o"></i>';
                $value = $context->find('str');
                $buffer .= $this->section996eb735bf1ac13d0059e74f10439783($context, $indent, $value);
                $buffer .= ' : <a href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf8212f72dfd723646cd529c9162a808(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <nav class="nav navbar-nav hidden-md-down address-head">
                    {{# phoneno}}
                        <span><i class="fa fa-phone"></i>{{#str}}callus, theme_academi{{/str}} : {{ phoneno }}</span>
                    {{/ phoneno}}
                    {{# emailid}}
                        <span><i class="fa fa-envelope-o"></i>{{#str}}email, theme_academi{{/str}} : <a href="mailto:{{emailid}}">{{ emailid }}</a></span>
                    {{/ emailid}}
                </nav>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <nav class="nav navbar-nav hidden-md-down address-head">
';
                $value = $context->find('phoneno');
                $buffer .= $this->section892ab2757f26bdcb57fe7dc654e2d46f($context, $indent, $value);
                $value = $context->find('emailid');
                $buffer .= $this->section71c0ee2949b6eccf3e563292b6f84e0b($context, $indent, $value);
                $buffer .= $indent . '                </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB676f4bb2645e861d8cbee05814e6cfe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="primary-navigation">
                        {{> core/moremenu}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="primary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF079183c2e10d151c34174a0b3a3f44e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> theme_boost/language_menu }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_boost/language_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9e23d79a85004416d048e2cac960de4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/user_menu }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/user_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
