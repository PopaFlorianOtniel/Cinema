<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\User;
use Authorization\IdentityInterface;

/**
 * Users policy
 */
class UserPolicy
{
    /**
     * Check if $user can create Users
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Users $resource
     * @return bool
     */
    public function canAdd(IdentityInterface $user, User $resource)
    {
        return true;
    }

    /**
     * Check if $user can update Users
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Users $resource
     * @return bool
     */
    public function canEdit(IdentityInterface $user, User $resource)
    {
        return $this->isAuthor($user, $resource);
    }

    /**
     * Check if $user can delete Users
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Users $resource
     * @return bool
     */
    public function canDelete(IdentityInterface $user, User $resource)
    {
        return $this->isAuthor($user, $resource);
    }

    /**
     * Check if $user can view Users
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Users $resource
     * @return bool
     */
    public function canView(IdentityInterface $user, User $resource)
    {
        return true;
    }

    /**
     * Check if $user is author
     *
     * @param IdentityInterface $user
     * @param User $user
     * @return boolean
     */
    protected function isAuthor(IdentityInterface $user, User $resource)
    {
        return $resource->user_id === $user->getIdentifier();
    }
}
