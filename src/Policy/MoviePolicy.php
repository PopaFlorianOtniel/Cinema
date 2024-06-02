<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Movie;
use Authorization\IdentityInterface;

/**
 * Movie policy
 */
class MoviePolicy
{
    /**
     * Check if $user can create Movie
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Movie $movie
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Movie $movie)
    {
        return true;
    }

    /**
     * Check if $user can update Movie
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Movie $movie
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Movie $movie)
    {
        return $this->isAuthor($user, $movie);
    }

    /**
     * Check if $user can delete Movie
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Movie $movie
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Movie $movie)
    {
        return $this->isAuthor($user, $movie);
    }

    /**
     * Check if $user can view Movie
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Movie $movie
     * @return bool
     */
    public function canView(IdentityInterface $user, Movie $movie)
    {
        return true;
    }

    protected function isAuthor(IdentityInterface $user, Movie $movie)
    {
        return $movie->user_id === $user->getIdentifier();
    }

}
