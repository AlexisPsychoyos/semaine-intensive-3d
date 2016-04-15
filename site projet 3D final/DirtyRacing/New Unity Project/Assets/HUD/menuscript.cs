using UnityEngine;
using UnityEngine.UI;
using System.Collections;

public class menuscript : MonoBehaviour {

	public Canvas quitMenu;
	public Button startText;
	public Button exitText;
	public InputField nicknameUI;
	public static string nickname;

	// Use this for initialization
	void Start () {
		quitMenu = quitMenu.GetComponent<Canvas> ();
		startText = startText.GetComponent<Button> ();
		exitText = exitText.GetComponent<Button> ();
		quitMenu.enabled = false;
	
	}
	
	public void ExitPress()
	{
		quitMenu.enabled = true;
		startText.enabled = false;
		exitText.enabled = false;

	}

	public void NoPress()
	{
		quitMenu.enabled = false;
		startText.enabled = true;
		exitText.enabled = true;
		
	}

	public void StartLevel()
	{
		nickname = nicknameUI.text;
		Application.LoadLevel (1);
	}

	public void ExitGame()
	{
		Application.Quit ();
	}

}