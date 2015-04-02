<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbThemes
 */
class PhpbbThemes
{
    /**
     * @var integer
     */
    private $themesId;

    /**
     * @var string
     */
    private $templateName;

    /**
     * @var string
     */
    private $styleName;

    /**
     * @var string
     */
    private $headStylesheet;

    /**
     * @var string
     */
    private $bodyBackground;

    /**
     * @var string
     */
    private $bodyBgcolor;

    /**
     * @var string
     */
    private $bodyText;

    /**
     * @var string
     */
    private $bodyLink;

    /**
     * @var string
     */
    private $bodyVlink;

    /**
     * @var string
     */
    private $bodyAlink;

    /**
     * @var string
     */
    private $bodyHlink;

    /**
     * @var string
     */
    private $trColor1;

    /**
     * @var string
     */
    private $trColor2;

    /**
     * @var string
     */
    private $trColor3;

    /**
     * @var string
     */
    private $trClass1;

    /**
     * @var string
     */
    private $trClass2;

    /**
     * @var string
     */
    private $trClass3;

    /**
     * @var string
     */
    private $thColor1;

    /**
     * @var string
     */
    private $thColor2;

    /**
     * @var string
     */
    private $thColor3;

    /**
     * @var string
     */
    private $thClass1;

    /**
     * @var string
     */
    private $thClass2;

    /**
     * @var string
     */
    private $thClass3;

    /**
     * @var string
     */
    private $tdColor1;

    /**
     * @var string
     */
    private $tdColor2;

    /**
     * @var string
     */
    private $tdColor3;

    /**
     * @var string
     */
    private $tdClass1;

    /**
     * @var string
     */
    private $tdClass2;

    /**
     * @var string
     */
    private $tdClass3;

    /**
     * @var string
     */
    private $fontface1;

    /**
     * @var string
     */
    private $fontface2;

    /**
     * @var string
     */
    private $fontface3;

    /**
     * @var boolean
     */
    private $fontsize1;

    /**
     * @var boolean
     */
    private $fontsize2;

    /**
     * @var boolean
     */
    private $fontsize3;

    /**
     * @var string
     */
    private $fontcolor1;

    /**
     * @var string
     */
    private $fontcolor2;

    /**
     * @var string
     */
    private $fontcolor3;

    /**
     * @var string
     */
    private $spanClass1;

    /**
     * @var string
     */
    private $spanClass2;

    /**
     * @var string
     */
    private $spanClass3;

    /**
     * @var integer
     */
    private $imgSizePoll;

    /**
     * @var integer
     */
    private $imgSizePrivmsg;


    /**
     * Get themesId
     *
     * @return integer 
     */
    public function getThemesId()
    {
        return $this->themesId;
    }

    /**
     * Set templateName
     *
     * @param string $templateName
     * @return PhpbbThemes
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * Get templateName
     *
     * @return string 
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Set styleName
     *
     * @param string $styleName
     * @return PhpbbThemes
     */
    public function setStyleName($styleName)
    {
        $this->styleName = $styleName;

        return $this;
    }

    /**
     * Get styleName
     *
     * @return string 
     */
    public function getStyleName()
    {
        return $this->styleName;
    }

    /**
     * Set headStylesheet
     *
     * @param string $headStylesheet
     * @return PhpbbThemes
     */
    public function setHeadStylesheet($headStylesheet)
    {
        $this->headStylesheet = $headStylesheet;

        return $this;
    }

    /**
     * Get headStylesheet
     *
     * @return string 
     */
    public function getHeadStylesheet()
    {
        return $this->headStylesheet;
    }

    /**
     * Set bodyBackground
     *
     * @param string $bodyBackground
     * @return PhpbbThemes
     */
    public function setBodyBackground($bodyBackground)
    {
        $this->bodyBackground = $bodyBackground;

        return $this;
    }

    /**
     * Get bodyBackground
     *
     * @return string 
     */
    public function getBodyBackground()
    {
        return $this->bodyBackground;
    }

    /**
     * Set bodyBgcolor
     *
     * @param string $bodyBgcolor
     * @return PhpbbThemes
     */
    public function setBodyBgcolor($bodyBgcolor)
    {
        $this->bodyBgcolor = $bodyBgcolor;

        return $this;
    }

    /**
     * Get bodyBgcolor
     *
     * @return string 
     */
    public function getBodyBgcolor()
    {
        return $this->bodyBgcolor;
    }

    /**
     * Set bodyText
     *
     * @param string $bodyText
     * @return PhpbbThemes
     */
    public function setBodyText($bodyText)
    {
        $this->bodyText = $bodyText;

        return $this;
    }

    /**
     * Get bodyText
     *
     * @return string 
     */
    public function getBodyText()
    {
        return $this->bodyText;
    }

    /**
     * Set bodyLink
     *
     * @param string $bodyLink
     * @return PhpbbThemes
     */
    public function setBodyLink($bodyLink)
    {
        $this->bodyLink = $bodyLink;

        return $this;
    }

    /**
     * Get bodyLink
     *
     * @return string 
     */
    public function getBodyLink()
    {
        return $this->bodyLink;
    }

    /**
     * Set bodyVlink
     *
     * @param string $bodyVlink
     * @return PhpbbThemes
     */
    public function setBodyVlink($bodyVlink)
    {
        $this->bodyVlink = $bodyVlink;

        return $this;
    }

    /**
     * Get bodyVlink
     *
     * @return string 
     */
    public function getBodyVlink()
    {
        return $this->bodyVlink;
    }

    /**
     * Set bodyAlink
     *
     * @param string $bodyAlink
     * @return PhpbbThemes
     */
    public function setBodyAlink($bodyAlink)
    {
        $this->bodyAlink = $bodyAlink;

        return $this;
    }

    /**
     * Get bodyAlink
     *
     * @return string 
     */
    public function getBodyAlink()
    {
        return $this->bodyAlink;
    }

    /**
     * Set bodyHlink
     *
     * @param string $bodyHlink
     * @return PhpbbThemes
     */
    public function setBodyHlink($bodyHlink)
    {
        $this->bodyHlink = $bodyHlink;

        return $this;
    }

    /**
     * Get bodyHlink
     *
     * @return string 
     */
    public function getBodyHlink()
    {
        return $this->bodyHlink;
    }

    /**
     * Set trColor1
     *
     * @param string $trColor1
     * @return PhpbbThemes
     */
    public function setTrColor1($trColor1)
    {
        $this->trColor1 = $trColor1;

        return $this;
    }

    /**
     * Get trColor1
     *
     * @return string 
     */
    public function getTrColor1()
    {
        return $this->trColor1;
    }

    /**
     * Set trColor2
     *
     * @param string $trColor2
     * @return PhpbbThemes
     */
    public function setTrColor2($trColor2)
    {
        $this->trColor2 = $trColor2;

        return $this;
    }

    /**
     * Get trColor2
     *
     * @return string 
     */
    public function getTrColor2()
    {
        return $this->trColor2;
    }

    /**
     * Set trColor3
     *
     * @param string $trColor3
     * @return PhpbbThemes
     */
    public function setTrColor3($trColor3)
    {
        $this->trColor3 = $trColor3;

        return $this;
    }

    /**
     * Get trColor3
     *
     * @return string 
     */
    public function getTrColor3()
    {
        return $this->trColor3;
    }

    /**
     * Set trClass1
     *
     * @param string $trClass1
     * @return PhpbbThemes
     */
    public function setTrClass1($trClass1)
    {
        $this->trClass1 = $trClass1;

        return $this;
    }

    /**
     * Get trClass1
     *
     * @return string 
     */
    public function getTrClass1()
    {
        return $this->trClass1;
    }

    /**
     * Set trClass2
     *
     * @param string $trClass2
     * @return PhpbbThemes
     */
    public function setTrClass2($trClass2)
    {
        $this->trClass2 = $trClass2;

        return $this;
    }

    /**
     * Get trClass2
     *
     * @return string 
     */
    public function getTrClass2()
    {
        return $this->trClass2;
    }

    /**
     * Set trClass3
     *
     * @param string $trClass3
     * @return PhpbbThemes
     */
    public function setTrClass3($trClass3)
    {
        $this->trClass3 = $trClass3;

        return $this;
    }

    /**
     * Get trClass3
     *
     * @return string 
     */
    public function getTrClass3()
    {
        return $this->trClass3;
    }

    /**
     * Set thColor1
     *
     * @param string $thColor1
     * @return PhpbbThemes
     */
    public function setThColor1($thColor1)
    {
        $this->thColor1 = $thColor1;

        return $this;
    }

    /**
     * Get thColor1
     *
     * @return string 
     */
    public function getThColor1()
    {
        return $this->thColor1;
    }

    /**
     * Set thColor2
     *
     * @param string $thColor2
     * @return PhpbbThemes
     */
    public function setThColor2($thColor2)
    {
        $this->thColor2 = $thColor2;

        return $this;
    }

    /**
     * Get thColor2
     *
     * @return string 
     */
    public function getThColor2()
    {
        return $this->thColor2;
    }

    /**
     * Set thColor3
     *
     * @param string $thColor3
     * @return PhpbbThemes
     */
    public function setThColor3($thColor3)
    {
        $this->thColor3 = $thColor3;

        return $this;
    }

    /**
     * Get thColor3
     *
     * @return string 
     */
    public function getThColor3()
    {
        return $this->thColor3;
    }

    /**
     * Set thClass1
     *
     * @param string $thClass1
     * @return PhpbbThemes
     */
    public function setThClass1($thClass1)
    {
        $this->thClass1 = $thClass1;

        return $this;
    }

    /**
     * Get thClass1
     *
     * @return string 
     */
    public function getThClass1()
    {
        return $this->thClass1;
    }

    /**
     * Set thClass2
     *
     * @param string $thClass2
     * @return PhpbbThemes
     */
    public function setThClass2($thClass2)
    {
        $this->thClass2 = $thClass2;

        return $this;
    }

    /**
     * Get thClass2
     *
     * @return string 
     */
    public function getThClass2()
    {
        return $this->thClass2;
    }

    /**
     * Set thClass3
     *
     * @param string $thClass3
     * @return PhpbbThemes
     */
    public function setThClass3($thClass3)
    {
        $this->thClass3 = $thClass3;

        return $this;
    }

    /**
     * Get thClass3
     *
     * @return string 
     */
    public function getThClass3()
    {
        return $this->thClass3;
    }

    /**
     * Set tdColor1
     *
     * @param string $tdColor1
     * @return PhpbbThemes
     */
    public function setTdColor1($tdColor1)
    {
        $this->tdColor1 = $tdColor1;

        return $this;
    }

    /**
     * Get tdColor1
     *
     * @return string 
     */
    public function getTdColor1()
    {
        return $this->tdColor1;
    }

    /**
     * Set tdColor2
     *
     * @param string $tdColor2
     * @return PhpbbThemes
     */
    public function setTdColor2($tdColor2)
    {
        $this->tdColor2 = $tdColor2;

        return $this;
    }

    /**
     * Get tdColor2
     *
     * @return string 
     */
    public function getTdColor2()
    {
        return $this->tdColor2;
    }

    /**
     * Set tdColor3
     *
     * @param string $tdColor3
     * @return PhpbbThemes
     */
    public function setTdColor3($tdColor3)
    {
        $this->tdColor3 = $tdColor3;

        return $this;
    }

    /**
     * Get tdColor3
     *
     * @return string 
     */
    public function getTdColor3()
    {
        return $this->tdColor3;
    }

    /**
     * Set tdClass1
     *
     * @param string $tdClass1
     * @return PhpbbThemes
     */
    public function setTdClass1($tdClass1)
    {
        $this->tdClass1 = $tdClass1;

        return $this;
    }

    /**
     * Get tdClass1
     *
     * @return string 
     */
    public function getTdClass1()
    {
        return $this->tdClass1;
    }

    /**
     * Set tdClass2
     *
     * @param string $tdClass2
     * @return PhpbbThemes
     */
    public function setTdClass2($tdClass2)
    {
        $this->tdClass2 = $tdClass2;

        return $this;
    }

    /**
     * Get tdClass2
     *
     * @return string 
     */
    public function getTdClass2()
    {
        return $this->tdClass2;
    }

    /**
     * Set tdClass3
     *
     * @param string $tdClass3
     * @return PhpbbThemes
     */
    public function setTdClass3($tdClass3)
    {
        $this->tdClass3 = $tdClass3;

        return $this;
    }

    /**
     * Get tdClass3
     *
     * @return string 
     */
    public function getTdClass3()
    {
        return $this->tdClass3;
    }

    /**
     * Set fontface1
     *
     * @param string $fontface1
     * @return PhpbbThemes
     */
    public function setFontface1($fontface1)
    {
        $this->fontface1 = $fontface1;

        return $this;
    }

    /**
     * Get fontface1
     *
     * @return string 
     */
    public function getFontface1()
    {
        return $this->fontface1;
    }

    /**
     * Set fontface2
     *
     * @param string $fontface2
     * @return PhpbbThemes
     */
    public function setFontface2($fontface2)
    {
        $this->fontface2 = $fontface2;

        return $this;
    }

    /**
     * Get fontface2
     *
     * @return string 
     */
    public function getFontface2()
    {
        return $this->fontface2;
    }

    /**
     * Set fontface3
     *
     * @param string $fontface3
     * @return PhpbbThemes
     */
    public function setFontface3($fontface3)
    {
        $this->fontface3 = $fontface3;

        return $this;
    }

    /**
     * Get fontface3
     *
     * @return string 
     */
    public function getFontface3()
    {
        return $this->fontface3;
    }

    /**
     * Set fontsize1
     *
     * @param boolean $fontsize1
     * @return PhpbbThemes
     */
    public function setFontsize1($fontsize1)
    {
        $this->fontsize1 = $fontsize1;

        return $this;
    }

    /**
     * Get fontsize1
     *
     * @return boolean 
     */
    public function getFontsize1()
    {
        return $this->fontsize1;
    }

    /**
     * Set fontsize2
     *
     * @param boolean $fontsize2
     * @return PhpbbThemes
     */
    public function setFontsize2($fontsize2)
    {
        $this->fontsize2 = $fontsize2;

        return $this;
    }

    /**
     * Get fontsize2
     *
     * @return boolean 
     */
    public function getFontsize2()
    {
        return $this->fontsize2;
    }

    /**
     * Set fontsize3
     *
     * @param boolean $fontsize3
     * @return PhpbbThemes
     */
    public function setFontsize3($fontsize3)
    {
        $this->fontsize3 = $fontsize3;

        return $this;
    }

    /**
     * Get fontsize3
     *
     * @return boolean 
     */
    public function getFontsize3()
    {
        return $this->fontsize3;
    }

    /**
     * Set fontcolor1
     *
     * @param string $fontcolor1
     * @return PhpbbThemes
     */
    public function setFontcolor1($fontcolor1)
    {
        $this->fontcolor1 = $fontcolor1;

        return $this;
    }

    /**
     * Get fontcolor1
     *
     * @return string 
     */
    public function getFontcolor1()
    {
        return $this->fontcolor1;
    }

    /**
     * Set fontcolor2
     *
     * @param string $fontcolor2
     * @return PhpbbThemes
     */
    public function setFontcolor2($fontcolor2)
    {
        $this->fontcolor2 = $fontcolor2;

        return $this;
    }

    /**
     * Get fontcolor2
     *
     * @return string 
     */
    public function getFontcolor2()
    {
        return $this->fontcolor2;
    }

    /**
     * Set fontcolor3
     *
     * @param string $fontcolor3
     * @return PhpbbThemes
     */
    public function setFontcolor3($fontcolor3)
    {
        $this->fontcolor3 = $fontcolor3;

        return $this;
    }

    /**
     * Get fontcolor3
     *
     * @return string 
     */
    public function getFontcolor3()
    {
        return $this->fontcolor3;
    }

    /**
     * Set spanClass1
     *
     * @param string $spanClass1
     * @return PhpbbThemes
     */
    public function setSpanClass1($spanClass1)
    {
        $this->spanClass1 = $spanClass1;

        return $this;
    }

    /**
     * Get spanClass1
     *
     * @return string 
     */
    public function getSpanClass1()
    {
        return $this->spanClass1;
    }

    /**
     * Set spanClass2
     *
     * @param string $spanClass2
     * @return PhpbbThemes
     */
    public function setSpanClass2($spanClass2)
    {
        $this->spanClass2 = $spanClass2;

        return $this;
    }

    /**
     * Get spanClass2
     *
     * @return string 
     */
    public function getSpanClass2()
    {
        return $this->spanClass2;
    }

    /**
     * Set spanClass3
     *
     * @param string $spanClass3
     * @return PhpbbThemes
     */
    public function setSpanClass3($spanClass3)
    {
        $this->spanClass3 = $spanClass3;

        return $this;
    }

    /**
     * Get spanClass3
     *
     * @return string 
     */
    public function getSpanClass3()
    {
        return $this->spanClass3;
    }

    /**
     * Set imgSizePoll
     *
     * @param integer $imgSizePoll
     * @return PhpbbThemes
     */
    public function setImgSizePoll($imgSizePoll)
    {
        $this->imgSizePoll = $imgSizePoll;

        return $this;
    }

    /**
     * Get imgSizePoll
     *
     * @return integer 
     */
    public function getImgSizePoll()
    {
        return $this->imgSizePoll;
    }

    /**
     * Set imgSizePrivmsg
     *
     * @param integer $imgSizePrivmsg
     * @return PhpbbThemes
     */
    public function setImgSizePrivmsg($imgSizePrivmsg)
    {
        $this->imgSizePrivmsg = $imgSizePrivmsg;

        return $this;
    }

    /**
     * Get imgSizePrivmsg
     *
     * @return integer 
     */
    public function getImgSizePrivmsg()
    {
        return $this->imgSizePrivmsg;
    }
}
