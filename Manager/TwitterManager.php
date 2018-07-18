<?php

namespace VectorXHD\TwitterBundle\Manager;

use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterManager
{
    /** @var TwitterOAuth */
    private $twitterOAuth;

    public function __construct($consumerKey, $consumerSecret, $oauthToken, $oauthTokenSecret)
    {
        $this->twitterOAuth = new TwitterOAuth($consumerKey, $consumerSecret, $oauthToken, $oauthTokenSecret);
    }

    /**
     * @return TwitterOAuth
     */
    public function getTwitterOAuth()
    {
        return $this->twitterOAuth;
    }

    /**
     * Post, retrieve and engage with Tweets
     * -------------------------------------
     */

    /**
     * @param $status
     * @return array|object
     */
    public function updateStatus($status)
    {
        return $this->twitterOAuth->post("statuses/update", ["status" => $status]);
    }

    /**
     * Get Tweet timelines
     * -------------------------------------
     */

    /**
     * @param int $count
     * @return array|object
     */
    public function getTimeline($count = 25)
    {
         return $this->twitterOAuth->get('statuses/home_timeline', ['count' => $count]);
    }

    /**
     * @param $screenName
     * @param int $count
     * @return array|object
     */
    public function getUserTimelineByScreenName($screenName, $count = 25)
    {
        return $this->twitterOAuth->get('statuses/user_timeline', ['screen_name' => $screenName, 'count' => $count]);
    }
}