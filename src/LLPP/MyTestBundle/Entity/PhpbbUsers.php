<?php

namespace LLPP\MyTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpbbUsers
 */
class PhpbbUsers
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var boolean
     */
    private $userActive;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $userPassword;

    /**
     * @var integer
     */
    private $userSessionTime;

    /**
     * @var integer
     */
    private $userSessionPage;

    /**
     * @var integer
     */
    private $userLastvisit;

    /**
     * @var integer
     */
    private $userRegdate;

    /**
     * @var boolean
     */
    private $userLevel;

    /**
     * @var integer
     */
    private $userPosts;

    /**
     * @var string
     */
    private $userTimezone;

    /**
     * @var boolean
     */
    private $userStyle;

    /**
     * @var string
     */
    private $userLang;

    /**
     * @var string
     */
    private $userDateformat;

    /**
     * @var integer
     */
    private $userNewPrivmsg;

    /**
     * @var integer
     */
    private $userUnreadPrivmsg;

    /**
     * @var integer
     */
    private $userLastPrivmsg;

    /**
     * @var integer
     */
    private $userEmailtime;

    /**
     * @var boolean
     */
    private $userViewemail;

    /**
     * @var boolean
     */
    private $userAttachsig;

    /**
     * @var boolean
     */
    private $userAllowhtml;

    /**
     * @var boolean
     */
    private $userAllowbbcode;

    /**
     * @var boolean
     */
    private $userAllowsmile;

    /**
     * @var boolean
     */
    private $userAllowavatar;

    /**
     * @var boolean
     */
    private $userAllowPm;

    /**
     * @var boolean
     */
    private $userAllowViewonline;

    /**
     * @var boolean
     */
    private $userNotify;

    /**
     * @var boolean
     */
    private $userNotifyPm;

    /**
     * @var boolean
     */
    private $userPopupPm;

    /**
     * @var integer
     */
    private $userRank;

    /**
     * @var string
     */
    private $userAvatar;

    /**
     * @var boolean
     */
    private $userAvatarType;

    /**
     * @var string
     */
    private $userEmail;

    /**
     * @var string
     */
    private $userIcq;

    /**
     * @var string
     */
    private $userWebsite;

    /**
     * @var string
     */
    private $userFrom;

    /**
     * @var string
     */
    private $userSig;

    /**
     * @var string
     */
    private $userSigBbcodeUid;

    /**
     * @var string
     */
    private $userAim;

    /**
     * @var string
     */
    private $userYim;

    /**
     * @var string
     */
    private $userMsnm;

    /**
     * @var string
     */
    private $userOcc;

    /**
     * @var string
     */
    private $userInterests;

    /**
     * @var string
     */
    private $userActkey;

    /**
     * @var string
     */
    private $userNewpasswd;

    /**
     * @var integer
     */
    private $userLoginTries;

    /**
     * @var integer
     */
    private $userLastLoginTry;


    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userActive
     *
     * @param boolean $userActive
     * @return PhpbbUsers
     */
    public function setUserActive($userActive)
    {
        $this->userActive = $userActive;

        return $this;
    }

    /**
     * Get userActive
     *
     * @return boolean 
     */
    public function getUserActive()
    {
        return $this->userActive;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return PhpbbUsers
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return PhpbbUsers
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userSessionTime
     *
     * @param integer $userSessionTime
     * @return PhpbbUsers
     */
    public function setUserSessionTime($userSessionTime)
    {
        $this->userSessionTime = $userSessionTime;

        return $this;
    }

    /**
     * Get userSessionTime
     *
     * @return integer 
     */
    public function getUserSessionTime()
    {
        return $this->userSessionTime;
    }

    /**
     * Set userSessionPage
     *
     * @param integer $userSessionPage
     * @return PhpbbUsers
     */
    public function setUserSessionPage($userSessionPage)
    {
        $this->userSessionPage = $userSessionPage;

        return $this;
    }

    /**
     * Get userSessionPage
     *
     * @return integer 
     */
    public function getUserSessionPage()
    {
        return $this->userSessionPage;
    }

    /**
     * Set userLastvisit
     *
     * @param integer $userLastvisit
     * @return PhpbbUsers
     */
    public function setUserLastvisit($userLastvisit)
    {
        $this->userLastvisit = $userLastvisit;

        return $this;
    }

    /**
     * Get userLastvisit
     *
     * @return integer 
     */
    public function getUserLastvisit()
    {
        return $this->userLastvisit;
    }

    /**
     * Set userRegdate
     *
     * @param integer $userRegdate
     * @return PhpbbUsers
     */
    public function setUserRegdate($userRegdate)
    {
        $this->userRegdate = $userRegdate;

        return $this;
    }

    /**
     * Get userRegdate
     *
     * @return integer 
     */
    public function getUserRegdate()
    {
        return $this->userRegdate;
    }

    /**
     * Set userLevel
     *
     * @param boolean $userLevel
     * @return PhpbbUsers
     */
    public function setUserLevel($userLevel)
    {
        $this->userLevel = $userLevel;

        return $this;
    }

    /**
     * Get userLevel
     *
     * @return boolean 
     */
    public function getUserLevel()
    {
        return $this->userLevel;
    }

    /**
     * Set userPosts
     *
     * @param integer $userPosts
     * @return PhpbbUsers
     */
    public function setUserPosts($userPosts)
    {
        $this->userPosts = $userPosts;

        return $this;
    }

    /**
     * Get userPosts
     *
     * @return integer 
     */
    public function getUserPosts()
    {
        return $this->userPosts;
    }

    /**
     * Set userTimezone
     *
     * @param string $userTimezone
     * @return PhpbbUsers
     */
    public function setUserTimezone($userTimezone)
    {
        $this->userTimezone = $userTimezone;

        return $this;
    }

    /**
     * Get userTimezone
     *
     * @return string 
     */
    public function getUserTimezone()
    {
        return $this->userTimezone;
    }

    /**
     * Set userStyle
     *
     * @param boolean $userStyle
     * @return PhpbbUsers
     */
    public function setUserStyle($userStyle)
    {
        $this->userStyle = $userStyle;

        return $this;
    }

    /**
     * Get userStyle
     *
     * @return boolean 
     */
    public function getUserStyle()
    {
        return $this->userStyle;
    }

    /**
     * Set userLang
     *
     * @param string $userLang
     * @return PhpbbUsers
     */
    public function setUserLang($userLang)
    {
        $this->userLang = $userLang;

        return $this;
    }

    /**
     * Get userLang
     *
     * @return string 
     */
    public function getUserLang()
    {
        return $this->userLang;
    }

    /**
     * Set userDateformat
     *
     * @param string $userDateformat
     * @return PhpbbUsers
     */
    public function setUserDateformat($userDateformat)
    {
        $this->userDateformat = $userDateformat;

        return $this;
    }

    /**
     * Get userDateformat
     *
     * @return string 
     */
    public function getUserDateformat()
    {
        return $this->userDateformat;
    }

    /**
     * Set userNewPrivmsg
     *
     * @param integer $userNewPrivmsg
     * @return PhpbbUsers
     */
    public function setUserNewPrivmsg($userNewPrivmsg)
    {
        $this->userNewPrivmsg = $userNewPrivmsg;

        return $this;
    }

    /**
     * Get userNewPrivmsg
     *
     * @return integer 
     */
    public function getUserNewPrivmsg()
    {
        return $this->userNewPrivmsg;
    }

    /**
     * Set userUnreadPrivmsg
     *
     * @param integer $userUnreadPrivmsg
     * @return PhpbbUsers
     */
    public function setUserUnreadPrivmsg($userUnreadPrivmsg)
    {
        $this->userUnreadPrivmsg = $userUnreadPrivmsg;

        return $this;
    }

    /**
     * Get userUnreadPrivmsg
     *
     * @return integer 
     */
    public function getUserUnreadPrivmsg()
    {
        return $this->userUnreadPrivmsg;
    }

    /**
     * Set userLastPrivmsg
     *
     * @param integer $userLastPrivmsg
     * @return PhpbbUsers
     */
    public function setUserLastPrivmsg($userLastPrivmsg)
    {
        $this->userLastPrivmsg = $userLastPrivmsg;

        return $this;
    }

    /**
     * Get userLastPrivmsg
     *
     * @return integer 
     */
    public function getUserLastPrivmsg()
    {
        return $this->userLastPrivmsg;
    }

    /**
     * Set userEmailtime
     *
     * @param integer $userEmailtime
     * @return PhpbbUsers
     */
    public function setUserEmailtime($userEmailtime)
    {
        $this->userEmailtime = $userEmailtime;

        return $this;
    }

    /**
     * Get userEmailtime
     *
     * @return integer 
     */
    public function getUserEmailtime()
    {
        return $this->userEmailtime;
    }

    /**
     * Set userViewemail
     *
     * @param boolean $userViewemail
     * @return PhpbbUsers
     */
    public function setUserViewemail($userViewemail)
    {
        $this->userViewemail = $userViewemail;

        return $this;
    }

    /**
     * Get userViewemail
     *
     * @return boolean 
     */
    public function getUserViewemail()
    {
        return $this->userViewemail;
    }

    /**
     * Set userAttachsig
     *
     * @param boolean $userAttachsig
     * @return PhpbbUsers
     */
    public function setUserAttachsig($userAttachsig)
    {
        $this->userAttachsig = $userAttachsig;

        return $this;
    }

    /**
     * Get userAttachsig
     *
     * @return boolean 
     */
    public function getUserAttachsig()
    {
        return $this->userAttachsig;
    }

    /**
     * Set userAllowhtml
     *
     * @param boolean $userAllowhtml
     * @return PhpbbUsers
     */
    public function setUserAllowhtml($userAllowhtml)
    {
        $this->userAllowhtml = $userAllowhtml;

        return $this;
    }

    /**
     * Get userAllowhtml
     *
     * @return boolean 
     */
    public function getUserAllowhtml()
    {
        return $this->userAllowhtml;
    }

    /**
     * Set userAllowbbcode
     *
     * @param boolean $userAllowbbcode
     * @return PhpbbUsers
     */
    public function setUserAllowbbcode($userAllowbbcode)
    {
        $this->userAllowbbcode = $userAllowbbcode;

        return $this;
    }

    /**
     * Get userAllowbbcode
     *
     * @return boolean 
     */
    public function getUserAllowbbcode()
    {
        return $this->userAllowbbcode;
    }

    /**
     * Set userAllowsmile
     *
     * @param boolean $userAllowsmile
     * @return PhpbbUsers
     */
    public function setUserAllowsmile($userAllowsmile)
    {
        $this->userAllowsmile = $userAllowsmile;

        return $this;
    }

    /**
     * Get userAllowsmile
     *
     * @return boolean 
     */
    public function getUserAllowsmile()
    {
        return $this->userAllowsmile;
    }

    /**
     * Set userAllowavatar
     *
     * @param boolean $userAllowavatar
     * @return PhpbbUsers
     */
    public function setUserAllowavatar($userAllowavatar)
    {
        $this->userAllowavatar = $userAllowavatar;

        return $this;
    }

    /**
     * Get userAllowavatar
     *
     * @return boolean 
     */
    public function getUserAllowavatar()
    {
        return $this->userAllowavatar;
    }

    /**
     * Set userAllowPm
     *
     * @param boolean $userAllowPm
     * @return PhpbbUsers
     */
    public function setUserAllowPm($userAllowPm)
    {
        $this->userAllowPm = $userAllowPm;

        return $this;
    }

    /**
     * Get userAllowPm
     *
     * @return boolean 
     */
    public function getUserAllowPm()
    {
        return $this->userAllowPm;
    }

    /**
     * Set userAllowViewonline
     *
     * @param boolean $userAllowViewonline
     * @return PhpbbUsers
     */
    public function setUserAllowViewonline($userAllowViewonline)
    {
        $this->userAllowViewonline = $userAllowViewonline;

        return $this;
    }

    /**
     * Get userAllowViewonline
     *
     * @return boolean 
     */
    public function getUserAllowViewonline()
    {
        return $this->userAllowViewonline;
    }

    /**
     * Set userNotify
     *
     * @param boolean $userNotify
     * @return PhpbbUsers
     */
    public function setUserNotify($userNotify)
    {
        $this->userNotify = $userNotify;

        return $this;
    }

    /**
     * Get userNotify
     *
     * @return boolean 
     */
    public function getUserNotify()
    {
        return $this->userNotify;
    }

    /**
     * Set userNotifyPm
     *
     * @param boolean $userNotifyPm
     * @return PhpbbUsers
     */
    public function setUserNotifyPm($userNotifyPm)
    {
        $this->userNotifyPm = $userNotifyPm;

        return $this;
    }

    /**
     * Get userNotifyPm
     *
     * @return boolean 
     */
    public function getUserNotifyPm()
    {
        return $this->userNotifyPm;
    }

    /**
     * Set userPopupPm
     *
     * @param boolean $userPopupPm
     * @return PhpbbUsers
     */
    public function setUserPopupPm($userPopupPm)
    {
        $this->userPopupPm = $userPopupPm;

        return $this;
    }

    /**
     * Get userPopupPm
     *
     * @return boolean 
     */
    public function getUserPopupPm()
    {
        return $this->userPopupPm;
    }

    /**
     * Set userRank
     *
     * @param integer $userRank
     * @return PhpbbUsers
     */
    public function setUserRank($userRank)
    {
        $this->userRank = $userRank;

        return $this;
    }

    /**
     * Get userRank
     *
     * @return integer 
     */
    public function getUserRank()
    {
        return $this->userRank;
    }

    /**
     * Set userAvatar
     *
     * @param string $userAvatar
     * @return PhpbbUsers
     */
    public function setUserAvatar($userAvatar)
    {
        $this->userAvatar = $userAvatar;

        return $this;
    }

    /**
     * Get userAvatar
     *
     * @return string 
     */
    public function getUserAvatar()
    {
        return $this->userAvatar;
    }

    /**
     * Set userAvatarType
     *
     * @param boolean $userAvatarType
     * @return PhpbbUsers
     */
    public function setUserAvatarType($userAvatarType)
    {
        $this->userAvatarType = $userAvatarType;

        return $this;
    }

    /**
     * Get userAvatarType
     *
     * @return boolean 
     */
    public function getUserAvatarType()
    {
        return $this->userAvatarType;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return PhpbbUsers
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userIcq
     *
     * @param string $userIcq
     * @return PhpbbUsers
     */
    public function setUserIcq($userIcq)
    {
        $this->userIcq = $userIcq;

        return $this;
    }

    /**
     * Get userIcq
     *
     * @return string 
     */
    public function getUserIcq()
    {
        return $this->userIcq;
    }

    /**
     * Set userWebsite
     *
     * @param string $userWebsite
     * @return PhpbbUsers
     */
    public function setUserWebsite($userWebsite)
    {
        $this->userWebsite = $userWebsite;

        return $this;
    }

    /**
     * Get userWebsite
     *
     * @return string 
     */
    public function getUserWebsite()
    {
        return $this->userWebsite;
    }

    /**
     * Set userFrom
     *
     * @param string $userFrom
     * @return PhpbbUsers
     */
    public function setUserFrom($userFrom)
    {
        $this->userFrom = $userFrom;

        return $this;
    }

    /**
     * Get userFrom
     *
     * @return string 
     */
    public function getUserFrom()
    {
        return $this->userFrom;
    }

    /**
     * Set userSig
     *
     * @param string $userSig
     * @return PhpbbUsers
     */
    public function setUserSig($userSig)
    {
        $this->userSig = $userSig;

        return $this;
    }

    /**
     * Get userSig
     *
     * @return string 
     */
    public function getUserSig()
    {
        return $this->userSig;
    }

    /**
     * Set userSigBbcodeUid
     *
     * @param string $userSigBbcodeUid
     * @return PhpbbUsers
     */
    public function setUserSigBbcodeUid($userSigBbcodeUid)
    {
        $this->userSigBbcodeUid = $userSigBbcodeUid;

        return $this;
    }

    /**
     * Get userSigBbcodeUid
     *
     * @return string 
     */
    public function getUserSigBbcodeUid()
    {
        return $this->userSigBbcodeUid;
    }

    /**
     * Set userAim
     *
     * @param string $userAim
     * @return PhpbbUsers
     */
    public function setUserAim($userAim)
    {
        $this->userAim = $userAim;

        return $this;
    }

    /**
     * Get userAim
     *
     * @return string 
     */
    public function getUserAim()
    {
        return $this->userAim;
    }

    /**
     * Set userYim
     *
     * @param string $userYim
     * @return PhpbbUsers
     */
    public function setUserYim($userYim)
    {
        $this->userYim = $userYim;

        return $this;
    }

    /**
     * Get userYim
     *
     * @return string 
     */
    public function getUserYim()
    {
        return $this->userYim;
    }

    /**
     * Set userMsnm
     *
     * @param string $userMsnm
     * @return PhpbbUsers
     */
    public function setUserMsnm($userMsnm)
    {
        $this->userMsnm = $userMsnm;

        return $this;
    }

    /**
     * Get userMsnm
     *
     * @return string 
     */
    public function getUserMsnm()
    {
        return $this->userMsnm;
    }

    /**
     * Set userOcc
     *
     * @param string $userOcc
     * @return PhpbbUsers
     */
    public function setUserOcc($userOcc)
    {
        $this->userOcc = $userOcc;

        return $this;
    }

    /**
     * Get userOcc
     *
     * @return string 
     */
    public function getUserOcc()
    {
        return $this->userOcc;
    }

    /**
     * Set userInterests
     *
     * @param string $userInterests
     * @return PhpbbUsers
     */
    public function setUserInterests($userInterests)
    {
        $this->userInterests = $userInterests;

        return $this;
    }

    /**
     * Get userInterests
     *
     * @return string 
     */
    public function getUserInterests()
    {
        return $this->userInterests;
    }

    /**
     * Set userActkey
     *
     * @param string $userActkey
     * @return PhpbbUsers
     */
    public function setUserActkey($userActkey)
    {
        $this->userActkey = $userActkey;

        return $this;
    }

    /**
     * Get userActkey
     *
     * @return string 
     */
    public function getUserActkey()
    {
        return $this->userActkey;
    }

    /**
     * Set userNewpasswd
     *
     * @param string $userNewpasswd
     * @return PhpbbUsers
     */
    public function setUserNewpasswd($userNewpasswd)
    {
        $this->userNewpasswd = $userNewpasswd;

        return $this;
    }

    /**
     * Get userNewpasswd
     *
     * @return string 
     */
    public function getUserNewpasswd()
    {
        return $this->userNewpasswd;
    }

    /**
     * Set userLoginTries
     *
     * @param integer $userLoginTries
     * @return PhpbbUsers
     */
    public function setUserLoginTries($userLoginTries)
    {
        $this->userLoginTries = $userLoginTries;

        return $this;
    }

    /**
     * Get userLoginTries
     *
     * @return integer 
     */
    public function getUserLoginTries()
    {
        return $this->userLoginTries;
    }

    /**
     * Set userLastLoginTry
     *
     * @param integer $userLastLoginTry
     * @return PhpbbUsers
     */
    public function setUserLastLoginTry($userLastLoginTry)
    {
        $this->userLastLoginTry = $userLastLoginTry;

        return $this;
    }

    /**
     * Get userLastLoginTry
     *
     * @return integer 
     */
    public function getUserLastLoginTry()
    {
        return $this->userLastLoginTry;
    }
}
