<?php

class __Mustache_d2890636654eb55c304f9f756cb1d35a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('footersmall');
        $buffer .= $this->sectionE43fae7703392787aa4aff365b1dde01($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('footersmall');
        if (empty($value)) {
            
            $buffer .= $indent . '    <footer id="page-footer" class="footer-popover footer-dark text-light">
';
            $buffer .= $indent . '        <div id="footer" ';
            $value = $context->find('footerbgimgclass');
            $buffer .= $this->sectionAd35e9a3cbf48574b19da6c4e65afc4e($context, $indent, $value);
            $buffer .= '>
';
            $value = $context->find('footerstatus');
            $buffer .= $this->section860d467a61732f02d852c829cafe4ff6($context, $indent, $value);
            $buffer .= $indent . '           
';
            $buffer .= $indent . '            <div data-region="footer-container-popover">
';
            $value = $context->findDot('output.has_communication_links');
            $buffer .= $this->sectionFb6792e2b3850088104a7eb1c247f8c2($context, $indent, $value);
            $buffer .= $indent . '                <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="';
            $value = $context->find('str');
            $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                    ';
            $value = $context->find('pix');
            $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </button>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="footer-content-popover container" data-region="footer-content-popover">
';
            $value = $context->findDot('output.has_communication_links');
            $buffer .= $this->section03d8b0ec17fd9fb16b53e1cb3cbeed65($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
            $buffer .= $indent . '                    <div class="logininfo">
';
            $buffer .= $indent . '                        
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    <div class="tool_usertours-resettourcontainer">
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '   
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <div class="footer-section p-3">
';
            $buffer .= $indent . '                    <div></div>
';
            $buffer .= $indent . '                    
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </footer>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('footersmall');
        $buffer .= $this->sectionB1e92dd16411765810a9cd938c844a5a($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('backtotopbtn');
        $buffer .= $this->sectionEf2aef73b602bcd95c0478d1879810e4($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section8397d600017f65f298d8425ee0497b7d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section44cca7cb7eae6e808ea785e5453e43c0($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('footersmall');
        $buffer .= $this->sectionB1e92dd16411765810a9cd938c844a5a($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('footersmall');
        if (empty($value)) {
            
            $buffer .= $indent . '    <footer id="page-footer" class="footer-popover footer-dark text-light">
';
            $buffer .= $indent . '        <div id="footer" ';
            $value = $context->find('footerbgimgclass');
            $buffer .= $this->sectionAd35e9a3cbf48574b19da6c4e65afc4e($context, $indent, $value);
            $buffer .= '>
';
            $value = $context->find('footerstatus');
            $buffer .= $this->section61b4026647459fefd65cac550a26a8df($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('footerbottomstatus');
            $buffer .= $this->section9fb6d885b31fc3efa7f73e6af42fd5cb($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </footer>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('backtotopbtn');
        $buffer .= $this->section743df70b89a8b0c96fd3e1fafd710169($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section8397d600017f65f298d8425ee0497b7d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section44cca7cb7eae6e808ea785e5453e43c0($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionA9886fc24541cbe929a87bd184e83d92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <p>{{{copyrightfooter}}}</p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('copyrightfooter'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE43fae7703392787aa4aff365b1dde01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <footer id="page-footer" class=" footer-popover footer-dark text-light">
        <div id="footer">
            <div class="footer-bottom">
                {{# copyrightfooter}}
                    <p>{{{copyrightfooter}}}</p>
                {{/ copyrightfooter}}
            </div>
        </div>
    </footer>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <footer id="page-footer" class=" footer-popover footer-dark text-light">
';
                $buffer .= $indent . '        <div id="footer">
';
                $buffer .= $indent . '            <div class="footer-bottom">
';
                $value = $context->find('copyrightfooter');
                $buffer .= $this->sectionA9886fc24541cbe929a87bd184e83d92($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </footer>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd35e9a3cbf48574b19da6c4e65afc4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' class="{{footerbgimgclass}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' class="';
                $value = $this->resolveValue($context->find('footerbgimgclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1033366f64fe0fd7e152c8d357d307ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <h2>{{ftitle1}}</h2>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <h2>';
                $value = $this->resolveValue($context->find('ftitle1'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6965d698f7585b9b14fb1c3e6dd540a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <div class="footer-logo">
                                                        <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                    </div>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <div class="footer-logo">
';
                $buffer .= $indent . '                                                        <a href="#"><img src="';
                $value = $this->resolveValue($context->find('footerlogourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="100" height="100" alt="Academi"></a>
';
                $buffer .= $indent . '                                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76ffbffa59521a1d103e8ac70ba2ac6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{#footerlogourl}}
                                                    <div class="footer-logo">
                                                        <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                    </div>
                                                {{/footerlogourl}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('footerlogourl');
                $buffer .= $this->section6965d698f7585b9b14fb1c3e6dd540a0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section984dc74a3e2f2893841dd935828f2d83(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{{footnote}}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDcc655d548a0ad3b5bd15fcb0cad1967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{colclass}}">
                                        <div class="infoarea">
                                            {{#ftitle1}}
                                                <h2>{{ftitle1}}</h2>
                                            {{/ftitle1}}
                                            {{#footlogostatus}}
                                                {{#footerlogourl}}
                                                    <div class="footer-logo">
                                                        <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                    </div>
                                                {{/footerlogourl}}
                                            {{/footlogostatus}}
                                            {{#footnote}}
                                                {{{footnote}}}
                                            {{/footnote}}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="infoarea">
';
                $value = $context->find('ftitle1');
                $buffer .= $this->section1033366f64fe0fd7e152c8d357d307ce($context, $indent, $value);
                $value = $context->find('footlogostatus');
                $buffer .= $this->section76ffbffa59521a1d103e8ac70ba2ac6c($context, $indent, $value);
                $value = $context->find('footnote');
                $buffer .= $this->section984dc74a3e2f2893841dd935828f2d83($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB597bcc4e4a433d1f9e947ce5741a692(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <h2>{{ftitle2}}</h2>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <h2>';
                $value = $this->resolveValue($context->find('ftitle2'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD668e8ac796ceb7827dc31eb854bc1fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <ul>
                                                    {{{infolink}}}
                                                </ul>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <ul>
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('infolink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbda50c93750eb40a8512d8085218d72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{colclass}} footer-links-block">
                                        <div class="foot-links">
                                            {{#ftitle2}}
                                                <h2>{{ftitle2}}</h2>
                                            {{/ftitle2}}
                                            {{# infolink}}
                                                <ul>
                                                    {{{infolink}}}
                                                </ul>
                                            {{/ infolink}}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' footer-links-block">
';
                $buffer .= $indent . '                                        <div class="foot-links">
';
                $value = $context->find('ftitle2');
                $buffer .= $this->sectionB597bcc4e4a433d1f9e947ce5741a692($context, $indent, $value);
                $value = $context->find('infolink');
                $buffer .= $this->sectionD668e8ac796ceb7827dc31eb854bc1fd($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5560f8335f0cd878e735094322f2931f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <h2>{{ftitle3}}</h2>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <h2>';
                $value = $this->resolveValue($context->find('ftitle3'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55ed098ae50f3c74ce725e5f3a7333a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p>{{address}}</p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p>';
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b459b9e2fdf8cbdef8c0bc0531e0bf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p><i class="fa fa-phone-square"></i> ';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7a2f554c4264014ba8cc29623dce59f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p><i class="fa fa-envelope"></i> ';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf4faaf91233c826de2eba90558418f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{colclass}}">
                                        <div class="contact-info">
                                            {{#ftitle3}}
                                                <h2>{{ftitle3}}</h2>
                                            {{/ftitle3}}
                                            {{# address}}
                                                <p>{{address}}</p>
                                            {{/ address}}
                                            {{# phoneno}}
                                                <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                            {{/ phoneno}}
                                            {{# emailid}}
                                                <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                            {{/ emailid}}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="contact-info">
';
                $value = $context->find('ftitle3');
                $buffer .= $this->section5560f8335f0cd878e735094322f2931f($context, $indent, $value);
                $value = $context->find('address');
                $buffer .= $this->section55ed098ae50f3c74ce725e5f3a7333a1($context, $indent, $value);
                $value = $context->find('phoneno');
                $buffer .= $this->section3b459b9e2fdf8cbdef8c0bc0531e0bf6($context, $indent, $value);
                $value = $context->find('emailid');
                $buffer .= $this->sectionA7a2f554c4264014ba8cc29623dce59f($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section130076ad46f12e640c65cf22c1aea1f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <h2>{{ftitle4}}</h2>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <h2>';
                $value = $this->resolveValue($context->find('ftitle4'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBef0df1df7c721df332a8da3bbc11fa9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        <li class="smedia-{{sno}}">
                                                            <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                                <span class="media-icon">
                                                                    <i class="fa fa-{{sicon}}"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                        <li class="smedia-';
                $value = $this->resolveValue($context->find('sno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                                            <a href="';
                $value = $this->resolveValue($context->find('surl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" style="background-color: ';
                $value = $this->resolveValue($context->find('siconcolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                                <span class="media-icon">
';
                $buffer .= $indent . '                                                                    <i class="fa fa-';
                $value = $this->resolveValue($context->find('sicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                                                </span>
';
                $buffer .= $indent . '                                                            </a>
';
                $buffer .= $indent . '                                                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1628dd71d081665280e22151c726b43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    {{#sicon}}
                                                        <li class="smedia-{{sno}}">
                                                            <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                                <span class="media-icon">
                                                                    <i class="fa fa-{{sicon}}"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    {{/sicon}}
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('sicon');
                $buffer .= $this->sectionBef0df1df7c721df332a8da3bbc11fa9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7b5e9d7b9c2875e784b0acafcd584ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{# socialstatus}}
                                                    {{#sicon}}
                                                        <li class="smedia-{{sno}}">
                                                            <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                                <span class="media-icon">
                                                                    <i class="fa fa-{{sicon}}"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    {{/sicon}}
                                                {{/ socialstatus}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('socialstatus');
                $buffer .= $this->sectionA1628dd71d081665280e22151c726b43($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa6f83397b8614b14059a076ef265e4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{colclass}}">
                                        <div class="social-media">
                                            {{#ftitle4}}
                                                <h2>{{ftitle4}}</h2>
                                            {{/ftitle4}}
                                            <ul>
                                            {{#socialmedia}}
                                                {{# socialstatus}}
                                                    {{#sicon}}
                                                        <li class="smedia-{{sno}}">
                                                            <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                                <span class="media-icon">
                                                                    <i class="fa fa-{{sicon}}"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    {{/sicon}}
                                                {{/ socialstatus}}
                                            {{/socialmedia}}
                                            </ul>
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="social-media">
';
                $value = $context->find('ftitle4');
                $buffer .= $this->section130076ad46f12e640c65cf22c1aea1f4($context, $indent, $value);
                $buffer .= $indent . '                                            <ul>
';
                $value = $context->find('socialmedia');
                $buffer .= $this->sectionD7b5e9d7b9c2875e784b0acafcd584ea($context, $indent, $value);
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section860d467a61732f02d852c829cafe4ff6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-main">
                    <div class="container-fluid">
                        <div id="course-footer">
                            {{{ output.course_footer }}}
                        </div>
                        <div class="row">
                            {{! Footer block 1 start }}
                                {{#fstatus1}}
                                    <div class="{{colclass}}">
                                        <div class="infoarea">
                                            {{#ftitle1}}
                                                <h2>{{ftitle1}}</h2>
                                            {{/ftitle1}}
                                            {{#footlogostatus}}
                                                {{#footerlogourl}}
                                                    <div class="footer-logo">
                                                        <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Academi"></a>
                                                    </div>
                                                {{/footerlogourl}}
                                            {{/footlogostatus}}
                                            {{#footnote}}
                                                {{{footnote}}}
                                            {{/footnote}}
                                        </div>
                                    </div>
                                {{/fstatus1}}
                            {{! Footer block 1 end }}

                            {{! Footer block 2 start }}
                                {{#fstatus2}}
                                    <div class="{{colclass}} footer-links-block">
                                        <div class="foot-links">
                                            {{#ftitle2}}
                                                <h2>{{ftitle2}}</h2>
                                            {{/ftitle2}}
                                            {{# infolink}}
                                                <ul>
                                                    {{{infolink}}}
                                                </ul>
                                            {{/ infolink}}
                                        </div>
                                    </div>
                                {{/fstatus2}}
                            {{! Footer block 2 end }}

                            {{! Footer block 3 start }}
                                {{#fstatus3}}
                                    <div class="{{colclass}}">
                                        <div class="contact-info">
                                            {{#ftitle3}}
                                                <h2>{{ftitle3}}</h2>
                                            {{/ftitle3}}
                                            {{# address}}
                                                <p>{{address}}</p>
                                            {{/ address}}
                                            {{# phoneno}}
                                                <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                            {{/ phoneno}}
                                            {{# emailid}}
                                                <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                            {{/ emailid}}
                                        </div>
                                    </div>
                                {{/fstatus3}}
                            {{! Footer block 3 end }}

                            {{! Footer block 4 start }}
                                {{#fstatus4}}
                                    <div class="{{colclass}}">
                                        <div class="social-media">
                                            {{#ftitle4}}
                                                <h2>{{ftitle4}}</h2>
                                            {{/ftitle4}}
                                            <ul>
                                            {{#socialmedia}}
                                                {{# socialstatus}}
                                                    {{#sicon}}
                                                        <li class="smedia-{{sno}}">
                                                            <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                                <span class="media-icon">
                                                                    <i class="fa fa-{{sicon}}"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    {{/sicon}}
                                                {{/ socialstatus}}
                                            {{/socialmedia}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/fstatus4}}
                            {{! Footer block 4 end }}
                        </div>
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-main">
';
                $buffer .= $indent . '                    <div class="container-fluid">
';
                $buffer .= $indent . '                        <div id="course-footer">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="row">
';
                $value = $context->find('fstatus1');
                $buffer .= $this->sectionDcc655d548a0ad3b5bd15fcb0cad1967($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('fstatus2');
                $buffer .= $this->sectionDbda50c93750eb40a8512d8085218d72($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('fstatus3');
                $buffer .= $this->sectionBf4faaf91233c826de2eba90558418f3($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('fstatus4');
                $buffer .= $this->sectionEa6f83397b8614b14059a076ef265e4c($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01c32b600d68c4d5f6fb463bea0a43a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'communicationroomlink, course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'communicationroomlink, course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section860fe5efd27e2c99776d92b09bfc4939(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/messages-o, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/messages-o, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb6792e2b3850088104a7eb1c247f8c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <button onclick="window.open(\'{{output.communication_url}}\', \'_blank\', \'noreferrer\')" class="btn btn-icon bg-primary text-white icon-no-margin btn-footer-communication" aria-label="{{#str}}communicationroomlink, course{{/str}}">
                        {{#pix}}t/messages-o, core{{/pix}}
                    </button>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <button onclick="window.open(\'';
                $value = $this->resolveValue($context->findDot('output.communication_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', \'_blank\', \'noreferrer\')" class="btn btn-icon bg-primary text-white icon-no-margin btn-footer-communication" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section01c32b600d68c4d5f6fb463bea0a43a3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('pix');
                $buffer .= $this->section860fe5efd27e2c99776d92b09bfc4939($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03d8b0ec17fd9fb16b53e1cb3cbeed65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-section p-3 border-bottom footer-link-communication">
                        <div class="footer-support-link">{{{ output.communication_link }}}</div>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-section p-3 border-bottom footer-link-communication">
';
                $buffer .= $indent . '                        <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.communication_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1e92dd16411765810a9cd938c844a5a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <footer id="page-footer" class=" footer-popover footer-dark text-light">
        <div id="footer">
            <div class="footer-bottom">
                <p>© 2025 Velandev Solutions – All Rights Reserved</p>
            </div>
        </div>
    </footer>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <footer id="page-footer" class=" footer-popover footer-dark text-light">
';
                $buffer .= $indent . '        <div id="footer">
';
                $buffer .= $indent . '            <div class="footer-bottom">
';
                $buffer .= $indent . '                <p>© 2025 Velandev Solutions – All Rights Reserved</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </footer>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf2aef73b602bcd95c0478d1879810e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a id="backToTop" href="#" class="btn btn-primary btn-lg back-to-top " role="button"><span class="fa fa-angle-up"></span></a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a id="backToTop" href="#" class="btn btn-primary btn-lg back-to-top " role="button"><span class="fa fa-angle-up"></span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8397d600017f65f298d8425ee0497b7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_boost/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . 'require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44cca7cb7eae6e808ea785e5453e43c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section714b41d1c815d6a2b533ed8609611266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2>{{ftitle1}}</h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h2>';
                $value = $this->resolveValue($context->find('ftitle1'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0f16a28541630d0ccaad4beca93b9c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <div class="footer-logo">
                                                    <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Velandev"></a>
                                                </div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <div class="footer-logo">
';
                $buffer .= $indent . '                                                    <a href="#"><img src="';
                $value = $this->resolveValue($context->find('footerlogourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="100" height="100" alt="Velandev"></a>
';
                $buffer .= $indent . '                                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c0e31f3548e3441fce226d3534a4198(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{#footerlogourl}}
                                                <div class="footer-logo">
                                                    <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Velandev"></a>
                                                </div>
                                            {{/footerlogourl}}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('footerlogourl');
                $buffer .= $this->sectionA0f16a28541630d0ccaad4beca93b9c4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b5b55d4931f27c378a8dda2d03cf3b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{footnote}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section904dacc0b946f508cb9b045d4b20230b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{colclass}}">
                                    <div class="infoarea">
                                        {{#ftitle1}}<h2>{{ftitle1}}</h2>{{/ftitle1}}
                                        {{#footlogostatus}}
                                            {{#footerlogourl}}
                                                <div class="footer-logo">
                                                    <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Velandev"></a>
                                                </div>
                                            {{/footerlogourl}}
                                        {{/footlogostatus}}
                                        {{#footnote}}{{{footnote}}}{{/footnote}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="infoarea">
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('ftitle1');
                $buffer .= $this->section714b41d1c815d6a2b533ed8609611266($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('footlogostatus');
                $buffer .= $this->section0c0e31f3548e3441fce226d3534a4198($context, $indent, $value);
                $buffer .= $indent . '                                        ';
                $value = $context->find('footnote');
                $buffer .= $this->section5b5b55d4931f27c378a8dda2d03cf3b1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc19105daa46caf322f89f6a77761574(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2>{{ftitle2}}</h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h2>';
                $value = $this->resolveValue($context->find('ftitle2'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ec4cdb5256b2a3d0d3f78125b46852f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<ul>{{{infolink}}}</ul>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<ul>';
                $value = $this->resolveValue($context->find('infolink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</ul>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b4c73e39c9a97fc39ec86cc2fa3fd6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{colclass}} footer-links-block">
                                    <div class="foot-links">
                                        {{#ftitle2}}<h2>{{ftitle2}}</h2>{{/ftitle2}}
                                        {{#infolink}}<ul>{{{infolink}}}</ul>{{/infolink}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' footer-links-block">
';
                $buffer .= $indent . '                                    <div class="foot-links">
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('ftitle2');
                $buffer .= $this->sectionCc19105daa46caf322f89f6a77761574($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('infolink');
                $buffer .= $this->section0ec4cdb5256b2a3d0d3f78125b46852f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section843e3a388a0900606e5de081af31cd98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2>{{ftitle3}}</h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h2>';
                $value = $this->resolveValue($context->find('ftitle3'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6cf5b3af3d7112eb9ad9e926c1cc130(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<p>{{address}}</p>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<p>';
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDcd81f913b39514d5b334fbdc6a06264(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<p><i class="fa fa-phone-square"></i> ';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF369013787d0d876132d6bb755e91ac7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<p><i class="fa fa-envelope"></i> ';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></p>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section629e66622736af4535e702ec96f71f2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{colclass}}">
                                    <div class="contact-info">
                                        {{#ftitle3}}<h2>{{ftitle3}}</h2>{{/ftitle3}}
                                        {{#address}}<p>{{address}}</p>{{/address}}
                                        {{#phoneno}}<p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>{{/phoneno}}
                                        {{#emailid}}<p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>{{/emailid}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="contact-info">
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('ftitle3');
                $buffer .= $this->section843e3a388a0900606e5de081af31cd98($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('address');
                $buffer .= $this->sectionA6cf5b3af3d7112eb9ad9e926c1cc130($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('phoneno');
                $buffer .= $this->sectionDcd81f913b39514d5b334fbdc6a06264($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('emailid');
                $buffer .= $this->sectionF369013787d0d876132d6bb755e91ac7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6bd632afb1d2b9dfc19a973e3d1f58be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2>{{ftitle4}}</h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h2>';
                $value = $this->resolveValue($context->find('ftitle4'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58f23cd502560fffd233f138b479e5cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <li class="smedia-{{sno}}">
                                                        <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                            <span class="media-icon">
                                                                <i class="fa fa-{{sicon}}"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <li class="smedia-';
                $value = $this->resolveValue($context->find('sno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                                        <a href="';
                $value = $this->resolveValue($context->find('surl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" style="background-color: ';
                $value = $this->resolveValue($context->find('siconcolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                            <span class="media-icon">
';
                $buffer .= $indent . '                                                                <i class="fa fa-';
                $value = $this->resolveValue($context->find('sicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                                            </span>
';
                $buffer .= $indent . '                                                        </a>
';
                $buffer .= $indent . '                                                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8879a2e44db6d40f50079f5e6b73d128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{#sicon}}
                                                    <li class="smedia-{{sno}}">
                                                        <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                            <span class="media-icon">
                                                                <i class="fa fa-{{sicon}}"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                {{/sicon}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('sicon');
                $buffer .= $this->section58f23cd502560fffd233f138b479e5cf($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section453bcabfb84229c97227134bf376a1bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{#socialstatus}}
                                                {{#sicon}}
                                                    <li class="smedia-{{sno}}">
                                                        <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                            <span class="media-icon">
                                                                <i class="fa fa-{{sicon}}"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                {{/sicon}}
                                            {{/socialstatus}}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('socialstatus');
                $buffer .= $this->section8879a2e44db6d40f50079f5e6b73d128($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB46bfc064895ddc30d54382b33889dfb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="{{colclass}}">
                                    <div class="social-media">
                                        {{#ftitle4}}<h2>{{ftitle4}}</h2>{{/ftitle4}}
                                        <ul>
                                        {{#socialmedia}}
                                            {{#socialstatus}}
                                                {{#sicon}}
                                                    <li class="smedia-{{sno}}">
                                                        <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                            <span class="media-icon">
                                                                <i class="fa fa-{{sicon}}"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                {{/sicon}}
                                            {{/socialstatus}}
                                        {{/socialmedia}}
                                        </ul>
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="social-media">
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('ftitle4');
                $buffer .= $this->section6bd632afb1d2b9dfc19a973e3d1f58be($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        <ul>
';
                $value = $context->find('socialmedia');
                $buffer .= $this->section453bcabfb84229c97227134bf376a1bf($context, $indent, $value);
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61b4026647459fefd65cac550a26a8df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-main">
                    <div class="container-fluid">
                        <div class="row">
                            {{#fstatus1}}
                                <div class="{{colclass}}">
                                    <div class="infoarea">
                                        {{#ftitle1}}<h2>{{ftitle1}}</h2>{{/ftitle1}}
                                        {{#footlogostatus}}
                                            {{#footerlogourl}}
                                                <div class="footer-logo">
                                                    <a href="#"><img src="{{footerlogourl}}" width="100" height="100" alt="Velandev"></a>
                                                </div>
                                            {{/footerlogourl}}
                                        {{/footlogostatus}}
                                        {{#footnote}}{{{footnote}}}{{/footnote}}
                                    </div>
                                </div>
                            {{/fstatus1}}

                            {{#fstatus2}}
                                <div class="{{colclass}} footer-links-block">
                                    <div class="foot-links">
                                        {{#ftitle2}}<h2>{{ftitle2}}</h2>{{/ftitle2}}
                                        {{#infolink}}<ul>{{{infolink}}}</ul>{{/infolink}}
                                    </div>
                                </div>
                            {{/fstatus2}}

                            {{#fstatus3}}
                                <div class="{{colclass}}">
                                    <div class="contact-info">
                                        {{#ftitle3}}<h2>{{ftitle3}}</h2>{{/ftitle3}}
                                        {{#address}}<p>{{address}}</p>{{/address}}
                                        {{#phoneno}}<p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>{{/phoneno}}
                                        {{#emailid}}<p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>{{/emailid}}
                                    </div>
                                </div>
                            {{/fstatus3}}

                            {{#fstatus4}}
                                <div class="{{colclass}}">
                                    <div class="social-media">
                                        {{#ftitle4}}<h2>{{ftitle4}}</h2>{{/ftitle4}}
                                        <ul>
                                        {{#socialmedia}}
                                            {{#socialstatus}}
                                                {{#sicon}}
                                                    <li class="smedia-{{sno}}">
                                                        <a href="{{{surl}}}" target="_blank" style="background-color: {{{siconcolor}}}">
                                                            <span class="media-icon">
                                                                <i class="fa fa-{{sicon}}"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                {{/sicon}}
                                            {{/socialstatus}}
                                        {{/socialmedia}}
                                        </ul>
                                    </div>
                                </div>
                            {{/fstatus4}}
                        </div>
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-main">
';
                $buffer .= $indent . '                    <div class="container-fluid">
';
                $buffer .= $indent . '                        <div class="row">
';
                $value = $context->find('fstatus1');
                $buffer .= $this->section904dacc0b946f508cb9b045d4b20230b($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('fstatus2');
                $buffer .= $this->section3b4c73e39c9a97fc39ec86cc2fa3fd6c($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('fstatus3');
                $buffer .= $this->section629e66622736af4535e702ec96f71f2a($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('fstatus4');
                $buffer .= $this->sectionB46bfc064895ddc30d54382b33889dfb($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fb6d885b31fc3efa7f73e6af42fd5cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-bottom">
                    <p>© 2025 Velandev Solutions – All Rights Reserved</p>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-bottom">
';
                $buffer .= $indent . '                    <p>© 2025 Velandev Solutions – All Rights Reserved</p>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section743df70b89a8b0c96fd3e1fafd710169(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a id="backToTop" href="#" class="btn btn-primary btn-lg back-to-top" role="button">
        <span class="fa fa-angle-up"></span>
    </a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a id="backToTop" href="#" class="btn btn-primary btn-lg back-to-top" role="button">
';
                $buffer .= $indent . '        <span class="fa fa-angle-up"></span>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
