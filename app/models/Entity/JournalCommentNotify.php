<?php
namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Message Center Journal Comment Notifications
 *
 * @Table(name="messagecenter_comments_journal", indexes={
 *   @Index(name="entity_id", columns={"entity_id"})
 * })
 * @Entity
 */
class JournalCommentNotify extends \FA\Doctrine\Entity
{
    /**
     * @var integer
     * @Column(name="user_id", type="integer", length=11, options={"unsigned"=true}, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    protected $user_id;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="journal_comment_notifications")
     * @JoinColumns({
     *   @JoinColumn(name="user_id", referencedColumnName="userid", onDelete="CASCADE")
     * })
     */
    protected $user;

    /**
     * @var integer
     * @Column(name="entity_id", type="integer", length=11, options={"unsigned"=true}, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    protected $comment_id;

    /**
     * @ManyToOne(targetEntity="JournalComment", inversedBy="notifications")
     * @JoinColumns({
     *   @JoinColumn(name="comment_id", referencedColumnName="row_id", onDelete="CASCADE")
     * })
     */
    protected $comment;

    /**
     * @var integer
     * @Column(name="source_id", type="integer", length=11, options={"unsigned"=true}, nullable=false)
     */
    protected $source_id;


}
